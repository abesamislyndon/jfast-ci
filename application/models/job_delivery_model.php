<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Job_delivery_model extends CI_Model
{
    function do_add_job_request($full_name, $tel_no, $email, $date_request, $time, $job_details, 
        $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, 
        $labor, $labor_cost, $dimension, $dimension_cost, $address_pickup, $company_client,
        $full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver,  $item_type, $qty_check, $dimension_check,$no_trips, $vehicle)
        {
        
        $this->db->select('*');
        $this->db->where('id', $destination);
        $this->db->from('destination');
        $query = $this->db->get();
        $s     = $query->result();
        
        $this->db->select('*');
        $this->db->where('id', $weight);
        $this->db->from('weight');
        $query = $this->db->get();
        $d     = $query->result();
        
        $this->db->select('*');
        $this->db->where('id', $labor);
        $this->db->from('labor');
        $query = $this->db->get();
        $l     = $query->result();
        
        $this->db->select('*');
        $this->db->where('id', $dimension);
        $this->db->from('dimension');
        $query = $this->db->get();
        $di    = $query->result();
        
        $destination_from  = $s[0]->from_destination;
        $destination_to    = $s[0]->to_destination;
        $destination_final = $destination_from . '-' . $destination_to;
        
        $destination1      = $destination_final;
        $destination_cost1 = $s[0]->estimated_cost;
        
        $weight1     = $d[0]->weight;
        $weight_cost = $d[0]->cost;
        
        $labor1     = $l[0]->labor;
        $labor_cost = $l[0]->cost;
        
        //$dimension1     = $di[0]->dimension;
        //$dimension_cost = $di[0]->cost;
        
        $cal_date   = $date_request;
        $format     = strtotime($cal_date);
        $mysql_date = date('Y-m-d', $format);
        
        $row = array(
            'full_name' => $full_name,
            'tel_no' => $tel_no,
            'email' => $email,
            'address_pickup' => $address_pickup,
            'company_client' => $company_client,

            'full_name_deliver' => $full_name_deliver,
            'tel_no_deliver' => $tel_no_deliver, 
            'email_deliver' => $email_deliver,
             'address_deliver' => $address_deliver,
            'company_client_deliver' => $company_client_deliver,
         
            'no_trips'=>$no_trips,
            'vehicle'=>$vehicle,

            'date_request' => $mysql_date,
            'time' => $time,
            'job_details' => $job_details,
            'sender' => $sender,
            'sender_id' => $id,
            'status' => $status,
                       
            'destination' => $destination1,
            'destination_id' => $destination,
            //'destination_cost' => $destination_cost1,
            
            'weight' => $weight1,
            'weight_id' => $weight,
             //'weight_cost' => $weight_cost,
            
            'labor' => $labor1,
            'labor_id' => $labor,
            //'labor_cost' => $labor_cost,
            
            //'dimension' => $dimension1,
            //'dimension_id' => $dimension,
            //'dimension_cost' => $dimension_cost
        );
        
        $this->db->insert('job_delivery', $row);
        $job_request_id1   = $this->db->insert_id();
        $row_count = count($item_type);
        for ($i = 0; $i < $row_count; $i++)
         {
            $rows1[] = array(
              'job_request_id'=>$job_request_id1,
              'item_type' => $item_type[$i],
              'qty_check' => $qty_check[$i],
              'dimension_check' => $dimension_check[$i]);
        }

        $this->db->insert_batch('item_type', $rows1);
        $this->session->set_flashdata('msg', 'Job Work Succesfully Send');
        
        if ($id == 1) {
            redirect('form');
        } else {
            redirect('regular_customer/success');
        }
    }
    
    function show_job_incoming_list($limit, $start)
    {   
        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->where('status', 1)->group_by('item_type.job_request_id');
        $this->db->from('job_delivery');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

  function show_job_approval($limit, $start)
    {   
        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->where('status', 6)->group_by('item_type.job_request_id');
        $this->db->from('job_delivery');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
  
  // Regualr customer check his own job request price

  function my_job_request_price($limit, $start, $sender)
    {
        
        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->where('sender', $sender);
        $where = '(status="1" or status = "6")';
        $this->db->where($where)->group_by('item_type.job_request_id');
        $this->db->from('job_delivery');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    
    function show_allocate_job_list($limit, $start)
    {
        
        $this->db->from('job_delivery');
        //$this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->group_by('job_delivery.job_request_id');
        $this->db->where('job_delivery.status', 2);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    function show_ongoing_job($limit, $start)
    {

        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
        $this->db->group_by('job_delivery.job_request_id');
        $this->db->where('status', 3);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }


    function show_driver_job($limit, $start, $driver)
    {
        
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
       // $this->db->group_by('job_delivery.job_request_id');
        $this->db->where('status', 3);
        $this->db->where('job_allocate_info.driver_id', $driver);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    function show_invoice_job($limit, $start)
    {
        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->group_by('job_delivery.job_request_id');
        $this->db->where('status', 4);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    function record_count()
    {
        return $this->db->count_all("job_delivery");
    }
    
    function show_individual($id)
    {
        
        $this->db->select(' * , item_type.job_request_id, sum(item_type_cost) as sumt');
        $this->db->join('item_type', 'job_delivery.job_request_id = item_type.job_request_id');
        $this->db->from('job_delivery');
        
        $this->db->where('job_delivery.job_request_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


   function show_individual_item_type($id)
    {
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->join('item_type', 'item_type.job_request_id = job_delivery.job_request_id');
        
        $this->db->where('job_delivery.job_request_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
   
    function show_individual_report($id)
    {
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
        $this->db->join('users', 'users.id = job_delivery.sender_id');
        $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        
        $this->db->where('job_delivery.job_request_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function destination()
    {
        $this->db->select('*');
        $this->db->from('destination');
        $query = $this->db->get();
        return $query->result();
    }
    
    function weight()
    {
        $this->db->select('*');
        $this->db->from('weight')->group_by('id');
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function dimension()
    {
        $this->db->select('*');
        $this->db->from('dimension')->group_by('id');
        $query = $this->db->get();
        return $query->result();
    }
    
    function labor()
    {
        $this->db->select('*');
        $this->db->from('labor')->group_by('id');
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function update_job_request($full_name, $company_client,  $tel_no, $email, $address_pickup,$full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver, $date_request, $time, $job_details, $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, $labor, $labor_cost, $dimension, $dimension_cost,$vehicle_cost,$trip_cost,$item_type_cost, $job_request_id,$item_type_id,$vehicle, $no_trips)
    {
        
        $this->db->select('*');
        $this->db->where('id', $destination);
        $this->db->from('destination');
        $query = $this->db->get();
        $s     = $query->result();
        
        $this->db->select('*');
        $this->db->where('id', $weight);
        $this->db->from('weight');
        $query = $this->db->get();
        $d     = $query->result();
        
        $this->db->select('*');
        $this->db->where('id', $labor);
        $this->db->from('labor');
        $query = $this->db->get();
        $l     = $query->result();
        
        $this->db->select('*');
        $this->db->where('id', $dimension);
        $this->db->from('dimension');
        $query = $this->db->get();
        $di    = $query->result();
        
        $destination_from  = $s[0]->from_destination;
        $destination_to    = $s[0]->to_destination;
        $destination_final = $destination_from . '-' . $destination_to;
        
        $destination1      = $destination_final;
        //$destination_cost1 = $s[0]->estimated_cost;
        
        $weight1     = $d[0]->weight;
        //$weight_cost = $d[0]->cost;
        
       //$labor1     = $l[0]->labor;
       //$labor_cost = $l[0]->cost;
        
       //$dimension1     = $di[0]->dimension;
       //$dimension_cost = $di[0]->cost;
        
        $cal_date   = $date_request;
        $format     = strtotime($cal_date);
        $mysql_date = date('Y-m-d', $format);
        
        
        $row = array(

            'full_name' => $full_name,
            'tel_no' => $tel_no,
            'email' => $email,
            'address_pickup'=>$address_pickup,
            'company_client' => $company_client,
    
            'full_name_deliver' => $full_name_deliver,
            'company_client_deliver' => $company_client_deliver,
            'tel_no_deliver' => $tel_no_deliver,
            'email_deliver' => $email_deliver,
            'address_deliver'=>$address_deliver,
           
            'time' => $time,
            'date_request' =>  $mysql_date,
            //'job_details' => $job_details,
            //'sender' => $sender,
            //'sender_id' => $id,
            'status' => 6,
           
            'destination' => $destination1,
            'destination_id' => $destination,
            'destination_cost' => $destination_cost,
            
            'weight' => $weight1,
            //'weight_id' => $weight,
            'weight_cost' => $weight_cost,
            
            'labor' => $labor,
            //'labor_id' => $labor,
            'labor_cost' => $labor_cost,
            //'dimension' => $dimension1,
            //'dimension_id' => $dimension,
            'dimension_cost' => $dimension_cost,

            'no_trips' => $no_trips,
            'trip_cost' => $trip_cost,
            'vehicle_cost' => $vehicle_cost,
            'vehicle' => $vehicle
        );
        
        
          $this->db->where('job_request_id', $job_request_id);
          $this->db->update('job_delivery', $row);

      
          $row_count = count($item_type_cost);
          for ($i = 0; $i < $row_count; $i++)
          {
           $rows = array(
              'item_type_cost'=>$item_type_cost[$i],
          );
          $this->db->where('item_type_id', $item_type_id[$i]);
          $this->db->update('item_type', $rows);
        }
     
        $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATE JOB WORK DETAILS');
        redirect('joblist_bank/individual_approved_reject/' . $job_request_id);
    }
    
    
    function approved_job_request($job_request_id)
    {
        
        $row = array(
            'status' => 2,
            'remarks' => 'approved'
        );
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->where('job_request_id', $job_request_id);
        $this->db->update('job_delivery', $row);
        
        $this->session->set_flashdata('msg', 'INFORMATION UPDATED');
        redirect('success/job_bank_success');
        
    }

    function reject_job_request($job_request_id)
    {
        
        $row = array(
            'status' => 4,
            'remarks' => 'reject'
        );
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->where('job_request_id', $job_request_id);
        $this->db->update('job_delivery', $row);
        
        $row = array(
            'full_name' => 'none',
            'address' => 'none',
            'contact_no' => 'none',
            'job_bank_id' => $job_request_id
        );
        
        $this->db->insert('job_allocate_info', $row);   
        $this->session->set_flashdata('msg', 'INFORMATION UPDATED');
        redirect('success/job_bank_reject');
        
    }
    
    function count_incoming_jobbank()
    {   
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 1);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    function count_approval()
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 6);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function count_allocate_jobbank()
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 2);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    
    function count_ongoing_jobbank()
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 3);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    function count_invoice_jobbank()
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 4);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
  
      function count_update_job($sender)
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('sender', $sender);
        $where = '(status="1" or status = "6")';
        $this->db->where($where);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    
    function count_invoice_total()
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 5);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }


    // count for regualr customer 


  function regualar_view_updated_price($sender)
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 1);
        $this->db->where('sender', $sender);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    
    
    function do_add_allocate($job_bank_id, $name, $address, $contact_no, $driver_id)
    {
        
        $this->db->select('*');
        $this->db->where('id', $name);
        $this->db->from('users');
        $query = $this->db->get();
        $s     = $query->result();
        
        $name1 = $s[0]->full_name;
        
        $row = array(
            'full_name' => $name1,
            'address' => $address,
            'contact_no' => $contact_no,
            'job_bank_id' => $job_bank_id,
            'driver_id' => $driver_id
        );
        
        $this->db->insert('job_allocate_info', $row);
        
        $row1 = array(
            'status' => 3,
            'remarks'=> 'approved'
        );
        $this->db->where('job_request_id', $job_bank_id);
        $this->db->update('job_delivery', $row1);
        
        $this->session->set_flashdata('msg', 'description succesfully added');
        redirect('success/job_allocate_success');
    }
    
    function do_job_complete($id)
    {
        
        $row1 = array(
            'status' => 4
        );
        $this->db->where('job_request_id', $id);
        $this->db->update('job_delivery', $row1);
        
        $this->session->set_flashdata('msg', 'description succesfully added');
        redirect('success/job_complete_success');
    }
    
    
    function do_job_invoice($id)
    {
        
        $row1 = array(
            'status' => 5
        );
        $this->db->where('job_request_id', $id);
        $this->db->update('job_delivery', $row1);
        
        $row2 = array(
            'job_bank_id' => $id,
            'date_invoice' => date('Y-m-d H:i:s')
        );
        $this->db->insert('invoice', $row2);
        
        $this->session->set_flashdata('msg', 'description succesfully added');
        redirect('success/job_invoice_success/' . $id);
    }
    
    function invoice_details($id)
    {
        
        $this->db->from('job_delivery');
        $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        $this->db->where('status', 5);
        $this->db->where('job_request_id', $id);
        $query = $this->db->get();
        return $query->result();
        
    }
    
    function sample($id)
    {
        
        $this->db->from('job_delivery');
        $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        $this->db->where('status', 5);
        $this->db->where('job_request_id', $id);
        $query = $this->db->get();
        return $query->result();
        
    }
    
    function sender_info()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role_code', 2);
        $query = $this->db->get();
        return $query->result();
    }
    
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */