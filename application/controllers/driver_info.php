<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Driver_info extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('job_delivery_model');
        $this->load->model('driver_info_model');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $data['driver_info'] = $this->driver_info_model->get_driver_info();
            
            $this->load->view('modal_form/allocate', $data);
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->driver_info_model->get_other_info($id);
            $driver_info1 = $data[0]->address;
            echo $driver_info1;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate1()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->driver_info_model->get_other_info1($id);
            $driver_info2 = $data[0]->company;
            echo $driver_info2;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate2()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->driver_info_model->get_other_info2($id);
            $driver_info3 = $data[0]->contact_num;
            echo $driver_info3;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
