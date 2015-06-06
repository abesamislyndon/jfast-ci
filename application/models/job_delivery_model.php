<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Job_delivery_model extends CI_Model
{
    function do_add_job_request($full_name, $tel_no, $email, $date_request, $time, $job_details, 
                    $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, 
                    $labor, $labor_cost, $dimension, $dimension_cost, $address, $company_client,
                    $full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver)
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
        
        $destination_from  = $s[0]->from;
        $destination_to    = $s[0]->to;
        $destination_final = $destination_from . '-' . $destination_to;
        
        $destination1      = $destination_final;
        $destination_cost1 = $s[0]->estimated_cost;
        
        $weight1     = $d[0]->weight;
        $weight_cost = $d[0]->cost;
        
        $labor1     = $l[0]->labor;
        $labor_cost = $l[0]->cost;
        
        $dimension1     = $di[0]->dimension;
        $dimension_cost = $di[0]->cost;
        
        
        $cal_date   = $date_request;
        $format     = strtotime($cal_date);
        $mysql_date = date('Y-m-d', $format);
        
        $row = array(
            'full_name' => $full_name,
            'tel_no' => $tel_no,
            'email' => $email,
             'address' => $address,
            'company_client' => $company_client,

            'full_name_deliver' => $full_name_deliver,
            'tel_no_deliver' => $tel_no_deliver,
            'email_deliver' => $email_deliver,
             'address_deliver' => $address_deliver,
            'company_client_deliver' => $company_client_deliver,
         

            'date_request' => $mysql_date,
            'time' => $time,
            'job_details' => $job_details,
            'sender' => $sender,
            'sender_id' => $id,
            'status' => $status,
           
            
            'destination' => $destination1,
            'destination_id' => $destination,
            'destination_cost' => $destination_cost1,
            
            'weight' => $weight1,
            'weight_id' => $weight,
            'weight_cost' => $weight_cost,
            
            'labor' => $labor1,
            'labor_id' => $labor,
            'labor_cost' => $labor_cost,
            
            'dimension' => $dimension1,
            'dimension_id' => $dimension,
            'dimension_cost' => $dimension_cost
        );
        
        $this->db->insert('job_delivery', $row);
        $this->session->set_flashdata('msg', 'description succesfully added');
        
        if ($id == 1) {
            redirect('form');
        } else {
            redirect('regular_customer/success');
        }
        
    }
    
    
    function show_job_incoming_list($limit, $start)
    {
        
        $this->db->from('job_delivery');
        $this->db->where('status', 1);
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
        $this->db->where('status', 2);
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
        
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
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
    
    function show_invoice_job($limit, $start)
    {
        
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
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
    
    public function record_count()
    {
        return $this->db->count_all("job_delivery");
    }
    
    
    function show_individual($id)
    {
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        //     $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
        //   $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        
        $this->db->where('job_delivery.job_request_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    function show_individual_report($id)
    {
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
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
    
    
    function update_job_request($full_name, $company_client,  $tel_no, $email, $address,
                                $full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver, $date_request, $time, $job_details, $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, $labor, $labor_cost, $dimension, $dimension_cost, $job_request_id)
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
        
        $destination_from  = $s[0]->from;
        $destination_to    = $s[0]->to;
        $destination_final = $destination_from . '-' . $destination_to;
        
        $destination1      = $destination_final;
        $destination_cost1 = $s[0]->estimated_cost;
        
        $weight1     = $d[0]->weight;
        $weight_cost = $d[0]->cost;
        
        $labor1     = $l[0]->labor;
        $labor_cost = $l[0]->cost;
        
        $dimension1     = $di[0]->dimension;
        $dimension_cost = $di[0]->cost;
        

         $cal_date   = $date_request;
        $format     = strtotime($cal_date);
        $mysql_date = date('Y-m-d', $format);
        
        
        $row = array(

            'full_name' => $full_name,
            'tel_no' => $tel_no,
            'email' => $email,
            'address'=>$address,
            'company_client' => $company_client,

            'full_name_deliver' => $full_name_deliver,
            'company_client_deliver' => $company_client_deliver,
            'tel_no_deliver' => $tel_no_deliver,
            'email_deliver' => $email_deliver,
            'address_deliver'=>$address_deliver,
           
            'time' => $time,
            'date_request' =>  $mysql_date,
            'job_details' => $job_details,
            'sender' => $sender,
            'sender_id' => $id,
            'status' => 1,
          
            
            'destination' => $destination1,
            'destination_id' => $destination,
            'destination_cost' => $destination_cost1,
            
            'weight' => $weight1,
            'weight_id' => $weight,
            'weight_cost' => $weight_cost,
            
            'labor' => $labor1,
            'labor_id' => $labor,
            'labor_cost' => $labor_cost,
            
            'dimension' => $dimension1,
            'dimension_id' => $dimension,
            'dimension_cost' => $dimension_cost
        );
        
        
        $this->db->where('job_request_id', $job_request_id);
        $this->db->update('job_delivery', $row);
        
        $this->session->set_flashdata('msg', 'INFORMATION UPDATED');
        redirect('joblist_bank/individuaL/' . $job_request_id);
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
            'name' => 'none',
            'address' => 'none',
            'contact_num' => 'none',
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
    
    
    function count_invoice_total()
    {
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 5);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }
    
    
    
    function do_add_allocate($job_bank_id, $name, $address, $contact_num)
    {
        
        $this->db->select('*');
        $this->db->where('id', $name);
        $this->db->from('driver_info');
        $query = $this->db->get();
        $s     = $query->result();
        
        $name1 = $s[0]->driver_name;
        
        $row = array(
            'name' => $name1,
            'address' => $address,
            'contact_num' => $contact_num,
            'job_bank_id' => $job_bank_id
        );
        
        $this->db->insert('job_allocate_info', $row);
        
        $row1 = array(
            'status' => 3
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
        $query = $this->db->get();
        return $query->result();
    }
    
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */