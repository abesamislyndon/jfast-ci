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

    function location_details1($id){
      
        $this->db->select('*');
        $this->db->where('id', $id);
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

    function do_add_location($from, $to){

       $row = array(
          'from_destination'=>$from,
          'to_destination'=>$to,
//          'estimated_cost'=>$cost,
          );
   
          $this->db->insert('destination', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/location');
  
    }

   function do_update_location($from, $to, $id){

     $row = array(
          'from_destination'=>$from,
          'to_destination'=>$to,
        //  'estimated_cost'=>$cost,
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

// ************************************** weight costing model **************************************************

    function weight_details(){
      
        $this->db->select('*');
        $this->db->from('weight');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function weight_details_id($id){
      
        $this->db->select('*');
        $this->db->from('weight');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $result = $query->result();
    }

    function do_add_weight($weight, $cost){

       $row = array(
          'weight'=>$weight,
          'cost'=>$cost,
          );
   
          $this->db->insert('weight', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/weight');
  
    }

    function do_update_weight($weight, $cost, $id){

     $row = array(
          'weight'=>$weight,
          'cost'=>$cost,
          );
          $this->db->where('id',$id);
          $this->db->update('weight', $row);
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/weight');

   }


      function do_delete_weight($id){

          $this->db->where('id',$id);
          $this->db->delete('weight');
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/weight');

   }


 // ************************************** weight costing model **************************************************  


    function dimension_details(){
      
        $this->db->select('*');
        $this->db->from('dimension');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function dimension_details_id($id){
      
        $this->db->select('*');
        $this->db->from('dimension');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $result = $query->result();
    }

    function do_add_dimension($dimension, $cost){

       $row = array(
          'dimension'=>$dimension,
          'cost'=>$cost,
          );
   
          $this->db->insert('dimension', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/dimension');
  
    }

    function do_update_dimension($dimension, $cost, $id){

     $row = array(
          'dimension'=>$dimension,
          'cost'=>$cost,
          );
          $this->db->where('id',$id);
          $this->db->update('dimension', $row);
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/dimension');

   }

      function do_delete_dimension($id){

          $this->db->where('id',$id);
          $this->db->delete('dimension');
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/dimension');

   }

   // ************************************** labor costing model **************************************************  


    function labor_details(){
      
        $this->db->select('*');
        $this->db->from('labor');
        $query = $this->db->get();
        return $result = $query->result();
    }

    function labor_details_id($id){
      
        $this->db->select('*');
        $this->db->from('labor');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $result = $query->result();
    }

    function do_add_labor($labor, $cost){

       $row = array(
          'labor'=>$labor,
          'cost'=>$cost,
          );
   
          $this->db->insert('labor', $row);
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/labor');
  
    }

    function do_update_labor($labor, $cost, $id){

     $row = array(
          'labor'=>$labor,
          'cost'=>$cost,
          );
          $this->db->where('id',$id);
          $this->db->update('labor', $row);
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/labor');

   }

      function do_delete_labor($id){

          $this->db->where('id',$id);
          $this->db->delete('labor');
        
          $this->session->set_flashdata('msg', 'description succesfully added');
          redirect('costing_attributes/labor');

   }
        
}
/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */