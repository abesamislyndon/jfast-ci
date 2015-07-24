<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_info_model extends CI_Model
  {
  function get_driver_info()
    {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('role_code', '3');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info($id)
    {
    $this->db->select('address');
    $this->db->from('users');
    $this->db->where('role_code', '3');
    $this->db->where('id', $id)->group_by('id');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info1($id)
    {
    $this->db->select('company');
    $this->db->from('users');
    $this->db->where('role_code', '3');
    $this->db->where('id', $id)->group_by('id');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info2($id)
    {
    $this->db->select('contact_no');
    $this->db->from('users');
    $this->db->where('role_code', '3');
    $this->db->where('id', $id)->group_by('id');
    $query = $this->db->get();
    return $result = $query->result();
    }

  function get_other_info3($id)
    {
    $this->db->select('id');
    $this->db->from('users');
    $this->db->where('role_code', '3');
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

 function do_job_complete_driver($id)
    {
        
        $row1 = array(
            'status' => 4,
            'date_complete' => date("Y-m-d")
        );
        $this->db->where('job_request_id', $id);
        $this->db->update('job_delivery', $row1);
        
        $this->session->set_flashdata('msg', 'description succesfully added');
        redirect('success/job_complete_success_driver');
    }


  function show_driver_history($limit, $start, $driver)
    {
        
        $this->db->from('job_delivery');
        $this->db->join('job_allocate_info', 'job_allocate_info.job_bank_id = job_delivery.job_request_id');
       // $this->db->group_by('job_delivery.job_request_id');
        $this->db->where('status', 5);
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

}

/* End of file category_model.php */
/* Location: ./application/models/crud_model.php */
