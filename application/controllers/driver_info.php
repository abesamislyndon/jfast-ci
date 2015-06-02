<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Driver_info extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Job_delivery_model');
        $this->load->model('Driver_info_model');
        
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id = $this->uri->segment(3);
            $data['individual'] = $this->Job_delivery_model->show_individual($id);         
            $data['driver_info'] = $this->Driver_info_model->get_driver_info();
            
            $this->load->view('modal_form/allocate', $data);
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->Driver_info_model->get_other_info($id);
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
            $data         = $this->Driver_info_model->get_other_info1($id);
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
            $data         = $this->Driver_info_model->get_other_info2($id);
            $driver_info3 = $data[0]->contact_num;
            echo $driver_info3;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }


    public function driver_list(){

        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $data['count_jobbank']     = $this->Job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->Job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();
            $data['list']              = $this->Driver_info_model->get_driver_info();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/driver_list');
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
