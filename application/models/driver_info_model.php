<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class  Driver_info_model extends CI_Model
{
    function get_driver_info(){
      
        $this->db->select('*');
        $this->db->from('driver_info');
        $query = $this->db->get();
        return $result = $query->result();
    }

      function get_other_info($id){
      
        $this->db->select('address');
        $this->db->from('driver_info');
        $this->db->where('id', $id)->group_by('id');
         $query = $this->db->get();
        return $result = $query->result();
    }


      function get_other_info1($id){
      
        $this->db->select('company');
        $this->db->from('driver_info');
        $this->db->where('id', $id)->group_by('id');
         $query = $this->db->get();
        return $result = $query->result();
    }


      function get_other_info2($id){
      
        $this->db->select('contact_num');
        $this->db->from('driver_info');
        $this->db->where('id', $id)->group_by('id');
         $query = $this->db->get();
        return $result = $query->result();
    }




        
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */