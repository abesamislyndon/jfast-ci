<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Manage_user_accounts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('job_delivery_model');
        $this->load->model('user');
        
    }
    
    /* *************************** Notification Controller ************************* */
    
    public function add_user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/add_new_user');
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    
    public function do_add_user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $full_name = $this->input->post('full_name');
            $username  = $this->input->post('username');
            $password  = $this->input->post('password');
            $password1 = $this->input->post('password1');
            $role_code = $this->input->post('role_code');
            
            if ($this->input->post('submit')) {
                $this->user->do_add_user_model($full_name, $username, $password, $password1, $role_code);
            }
        } else {
            redirect('login', 'refresh');
        }
    }
    
    
    
    public function account_list()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['list']              = $this->user->user_all_list();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/user_list');
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    
    public function update_user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $id = $this->uri->segment(3);
                
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['individual']        = $this->user->user_update_individual($id);
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/update_user', $data);
            $this->load->view('scaffolds/footer');
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    function do_update_user()
    {
        
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            if ($this->input->post('submit')) {
                $this->user->do_user_update_individual();
            }
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function update_user_pwd()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $id                        = $this->uri->segment(3);
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['individual']        = $this->user->user_update_individual($id);
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/update_password', $data);
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    
    public function do_update_user_pwd()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id               = $this->input->post('id');
            $password         = $this->input->post('password');
            $new_password     = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');
            
            if ($this->input->post('submit')) {
                $this->user->do_user_update_pwd($id, $password, $new_password, $confirm_password);
            }
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    
    public function add_user_account()
    {
        $this->load->model('user');
        if ($this->input->post('submit')) {
            $this->user->do_add_user_process();
        }
        
        redirect('manage_user_accounts/add_user');
    }
    
    public function del_user()
    {
        $id     = $this->uri->segment(3);
        $delete = $this->user->do_user_del($id);
    }
    
}