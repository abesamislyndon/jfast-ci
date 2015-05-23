<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class  Search_model extends CI_Model
{
   function fetch_search_jobBank($jobBank_id){
        
        $this->db->select('*');
        $this->db->from('job_delivery');
       // $this->db->join('invoice', 'invoice.job_bank_id = job_delivery.job_request_id');
        $this->db->where('job_delivery.job_request_id', $jobBank_id);
        //$this->db->like('invoice.job_bank_id', $jobBank_id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
     }
        
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */