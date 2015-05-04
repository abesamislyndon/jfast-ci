<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class  Job_delivery_model extends CI_Model
{
    function do_add_job_request($full_name, $tel_no, $email, $date_request, $time,$job_details, $sender, $id, $price, $status,$destination, $destination_cost,$weight, $weight_cost){

       $this->db->select('*');
       $this->db->where('id', $destination);
       $this->db->from('destination');
       $query = $this->db->get();
       $s = $query->result();
       
       $this->db->select('*');
       $this->db->where('id', $weight);
       $this->db->from('weight');
       $query = $this->db->get();
       $d = $query->result();

       $destination_from =   $s[0]->from;
       $destination_to =   $s[0]->to;
       $destination_final = $destination_from.'-'.$destination_to;

       $destination1 = $destination_final;
       $destination_cost1 =  $s[0]->estimated_cost;
       $weight =  $d[0]->weight;
       $weight_cost =  $d[0]->cost;

        $row = array(
          'full_name'=>$full_name,
          'tel_no'=>$tel_no,
          'email'=>$email,
          'date_request'=>$date_request,
          'time'=>$time,
          'job_details'=>$job_details,
          'sender'=>$sender,
          'sender_id'=>$id,
          'status'=>$status,
          'destination'=>$destination1,
          'destination_cost'=>$destination_cost1,
          'weight'=>$weight,
          'weight_cost'=>$weight_cost,
          );
   
 

          $this->db->insert('job_delivery', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('form');
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

    public function record_count()
    {
        return $this->db->count_all("job_delivery");
    }


    function show_individual($id){

      $this->db->select('*');
      $this->db->from('job_delivery');
      $this->db->where('job_request_id', $id);
      $query = $this->db->get();
      return $query->result();

    }

    function destination(){
      $this->db->select('*');
      $this->db->from('destination');
      $query = $this->db->get();
      return $query->result();
    }


    function weight(){
      $this->db->select('*');
      $this->db->from('weight')->group_by('id');
      $query = $this->db->get();
      return $query->result();
    }



    function update_job_request($full_name, $tel_no, $email, $date_request, $time,$address_from, $address_to, $job_details, $sender, $id, $price, $status,$job_request_id){

        $row = array(
          'full_name'=>$full_name,
          'tel_no'=>$tel_no,
          'email'=>$email,
          'date_request'=>$date_request,
          'time'=>$time,
          'address_from'=>$address_from,
          'address_to'=>$address_to,
          'job_details'=>$job_details,
          'sender'=>$sender,
          'sender_id'=>$id,
          'price'=>$price,
          //'status'=>$status
          );

         $this->db->select('*');
         $this->db->from('job_delivery');
         $this->db->where('job_request_id', $job_request_id);
         $this->db->update('job_delivery', $row); 

         $this->session->set_flashdata('msg', 'INFORMATION UPDATED');
         redirect('joblist_bank/individuaL/' .$job_request_id);
    }


     function approved_job_request($job_request_id){

      $row = array(
          'status'=>2
        );

      $this->db->select('*');
      $this->db->from('job_delivery');
      $this->db->where('job_request_id', $job_request_id);
      $this->db->update('job_delivery', $row); 

      $this->session->set_flashdata('msg', 'INFORMATION UPDATED');
      redirect('success/job_bank_success');
   
    }
 

      function count_incoming_jobbank(){
        
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 1);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function count_allocate_jobbank(){
      
        $this->db->select('status, COUNT(status) as total');
        $this->db->where('status', 2);
        $this->db->from('job_delivery');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $result = $query->result();
    }


        
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */