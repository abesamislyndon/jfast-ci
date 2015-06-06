<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_info_model extends CI_Model
  {
  function get_driver_info()
    {
    $this->db->select('*');
    $this->db->from('driver_info');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info($id)
    {
    $this->db->select('address');
    $this->db->from('driver_info');
    $this->db->where('id', $id)->group_by('id');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info1($id)
    {
    $this->db->select('company');
    $this->db->from('driver_info');
    $this->db->where('id', $id)->group_by('id');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info2($id)
    {
    $this->db->select('contact_num');
    $this->db->from('driver_info');
    $this->db->where('id', $id)->group_by('id');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function do_add_driver($driver_name, $company, $address, $contact_num)
    {
    $row = array(
      'driver_name' => $driver_name,
      'company' => $company,
      'address' => $address,
      'contact_num' => $contact_num
    );
    $this->db->insert('driver_info', $row);
    $this->session->set_flashdata('msg', 'succesfully added');
    redirect('driver_info/driver_list');
    }

  function driver_details_id($id)
    {
    $this->db->select('*');
    $this->db->from('driver_info');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $result = $query->result();
    }

  function do_update_driver($driver_name, $company, $address, $contact_num, $id)
    {
    $row = array(
      'driver_name' => $driver_name,
      'company' => $company,
      'address' => $address,
      'contact_num' => $contact_num
    );
    $this->db->where('id', $id);
    $this->db->update('driver_info', $row);
    $this->session->set_flashdata('msg', 'succesfully updated');
    redirect('driver_info/driver_list');
    }

  function do_delete_driver($id)
    {
    $this->db->where('id', $id);
    $this->db->delete('driver_info');
    $this->session->set_flashdata('msg', 'succesfully deleted');
    redirect('driver_info/driver_list');
    }
  }

/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */
