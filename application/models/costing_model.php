<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class  Costing_model extends CI_Model
{
    function location_details(){
      
        $this->db->select('*');
        $this->db->from('destination');
        $query = $this->db->get();
        return $result = $query->result();
    }

       function location_details_id($id){
      
        $this->db->select('*');
        $this->db->from('destination');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $result = $query->result();
    }

    function do_add_location($from, $to, $cost){

       $row = array(
          'from'=>$from,
          'to'=>$to,
          'estimated_cost'=>$cost,
          );
   
          $this->db->insert('destination', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/location');
  
    }

   function do_update_location($from, $to, $cost, $id){

     $row = array(
          'from'=>$from,
          'to'=>$to,
          'estimated_cost'=>$cost,
          );
          $this->db->where('id',$id);
          $this->db->update('destination', $row);
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/location');

   }

      function do_delete_location($id){

          $this->db->where('id',$id);
          $this->db->delete('destination');
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/location');

   }





        
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */