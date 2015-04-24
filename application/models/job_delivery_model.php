<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class  Job_delivery_model extends CI_Model
{
    function do_add_job_request($full_name, $tel_no, $email, $date_request, $time,$address_from, $address_to, $job_details){
        $row = array(
          'full_name'=>$full_name,
          'tel_no'=>$tel_no,
          'email'=>$email,
          'date_request'=>$date_request,
          'time'=>$time,
          'address_from'=>$address_from,
          'address_to'=>$address_to,
          'job_details'=>$job_details,
          );

          $this->db->insert('job_delivery', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('form');
    }

 
        
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */