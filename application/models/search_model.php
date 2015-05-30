<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class  Search_model extends CI_Model
{
   function fetch_search_jobBank($jobBank_id){
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->where('job_delivery.job_request_id', $jobBank_id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
     }

        function fetch_search_jobBank_regular($jobBank_id, $sender){
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->where('job_delivery.job_request_id', $jobBank_id);
        $this->db->where('job_delivery.sender_id', $sender);
     
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
     }

        function fetch_search_invoice($invoice_id){
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
        $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        $this->db->where('invoice.id', $invoice_id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
     }
        
     function fetch_search_invoice_regular($invoice_id, $sender){
        
        $this->db->select('*');
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
        $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        $this->db->where('invoice.id', $invoice_id);
        $this->db->where('job_delivery.sender_id', $sender);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
     }  

     function do_generate_jobBank($from, $to){      

        $cal_date   = $from;
        $format     = strtotime($cal_date);
        $mysql_from = date('Y-m-d', $format);

        $cal_date   = $to;
        $format     = strtotime($cal_date);
        $mysql_to = date('Y-m-d', $format);
       
       $this->db->select('*');
       $this->db->from('job_delivery');
       //$this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
       //$this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
      
       //$this->db->where('job_delivery.status', '5');
       $this->db->where('job_delivery.date_request >=',  $mysql_from);
       $this->db->where('job_delivery.date_request <=',  $mysql_to);
       $this->db->order_by('job_delivery.date_request','ASC');
       $query = $this->db->get();
       return $query->result();

    } 


     function do_generate_jobBank_regular($from, $to, $sender){      

        $cal_date   = $from;
        $format     = strtotime($cal_date);
        $mysql_from = date('Y-m-d', $format);

        $cal_date   = $to;
        $format     = strtotime($cal_date);
        $mysql_to = date('Y-m-d', $format);
       
       $this->db->select('*');
       $this->db->from('job_delivery');
       //$this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
       //$this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
      
       //$this->db->where('job_delivery.status', '5');
       $this->db->where('job_delivery.date_request >=',  $mysql_from);
       $this->db->where('job_delivery.date_request <=',  $mysql_to);
        $this->db->where('job_delivery.sender',$sender);

       $this->db->order_by('job_delivery.date_request','ASC');
       $query = $this->db->get();
       return $query->result();

    } 

        function do_generate_invoice($from, $to){      

        $cal_date   = $from;
        $format     = strtotime($cal_date);
        $mysql_from = date('Y-m-d', $format);

        $cal_date   = $to;
        $format     = strtotime($cal_date);
        $mysql_to = date('Y-m-d', $format);
       
       $this->db->select('*');
       $this->db->from('job_delivery');
       $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
       $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
      
       //$this->db->where('job_delivery.status', '5');
       $this->db->where('invoice.date_invoice >=',  $mysql_from);
       $this->db->where('invoice.date_invoice <=',  $mysql_to);
       $this->db->order_by('invoice.date_invoice','ASC');
       $query = $this->db->get();
       return $query->result();

    } 
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */