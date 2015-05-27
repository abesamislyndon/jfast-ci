<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Generate_history extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('job_delivery_model');
        $this->load->model('search_model');
        
    }
    
    public function jobBank()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
                   
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();


            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/generate_jobBank', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function jobBank_generate()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
 
           $from = $this->input->post('from');
           $to = $this->input->post('to');
 
           $this->session->set_userdata('date_from', $from);
           $ses_date_from = $this->session->userdata('date_from');
           $data['date_from'] = $ses_date_from;

           $this->session->set_userdata('date_to', $to);
           $ses_date_to = $this->session->userdata('date_to');
           $data['date_to'] = $ses_date_to;

           $data['result'] = $this->search_model->do_generate_jobBank($from, $to);
                   
           $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
           $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
           $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
           $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/generate_jobBank_result', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function invoice()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
                   
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();


            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/generate_invoice', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

      public function invoice_generate()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
 
           $from = $this->input->post('from');
           $to = $this->input->post('to');
 
           $this->session->set_userdata('date_from', $from);
           $ses_date_from = $this->session->userdata('date_from');
           $data['date_from'] = $ses_date_from;

           $this->session->set_userdata('date_to', $to);
           $ses_date_to = $this->session->userdata('date_to');
           $data['date_to'] = $ses_date_to;

           $data['result'] = $this->search_model->do_generate_invoice($from, $to);
                   
           $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
           $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
           $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
           $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/generate_invoice_result', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */