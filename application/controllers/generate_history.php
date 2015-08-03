<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Generate_history extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Job_delivery_model');
        $this->load->model('Search_model');
        $this->data['count_approval']     =  $this->Job_delivery_model->count_approval();
        $this->data['count_jobbank']      =  $this->Job_delivery_model->count_incoming_jobbank();
        $this->data['count_allocate']     =  $this->Job_delivery_model->count_allocate_jobbank();
        $this->data['count_ongoing_job']  =  $this->Job_delivery_model->count_ongoing_jobbank();
        $this->data['count_invoice_job']  =  $this->Job_delivery_model->count_invoice_jobbank();
        $data['total_invoice_job']        =  $this->Job_delivery_model->count_invoice_total();
        $sender = $this->session->userdata["logged_in"]["full_name"];   
        $this->data['count_updated_job'] = $this->Job_delivery_model->count_update_job($sender);
            
    }
    
    public function jobBank()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {


            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/generate_jobBank');
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    
    public function jobBank_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
                   

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/generate_jobBank_regular');
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

           $data['result'] = $this->Search_model->do_generate_jobBank($from, $to);
                   
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/generate_jobBank_result', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function jobBank_generate_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
 
           $from = $this->input->post('from');
           $to = $this->input->post('to');
 
           $this->session->set_userdata('date_from', $from);
           $ses_date_from = $this->session->userdata('date_from');
           $data['date_from'] = $ses_date_from;

           $this->session->set_userdata('date_to', $to);
           $ses_date_to = $this->session->userdata('date_to');
           $data['date_to'] = $ses_date_to;

           $sender = $this->session->userdata["logged_in"]["id"]; 
           $data['result'] = $this->Search_model->do_generate_jobBank_regular($from, $to, $sender);
                   
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/generate_jobBank_result_regular', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function invoice()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
                   
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/generate_invoice');
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

           $data['result'] = $this->Search_model->do_generate_invoice($from, $to);
                   
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/generate_invoice_result', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

//****************************************** inovice regular**************************************************************************

    public function invoice_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
                   
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/generate_invoice_regular');
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function invoice_generate_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
 
           $from = $this->input->post('from');
           $to = $this->input->post('to');
 
           $this->session->set_userdata('date_from', $from);
           $ses_date_from = $this->session->userdata('date_from');
           $data['date_from'] = $ses_date_from;

           $this->session->set_userdata('date_to', $to);
           $ses_date_to = $this->session->userdata('date_to');
           $data['date_to'] = $ses_date_to;

           $sender = $this->session->userdata["logged_in"]["id"]; 

           $data['result'] = $this->Search_model->do_generate_invoice_regular($from, $to, $sender);
                   
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/generate_invoice_result_regular', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

// *********************************************************************************** invoice with sender ****************************************

    public function invoice_with_sender()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
                   
            $data['sender_list'] = $this->Job_delivery_model->sender_info();

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/generate_invoice_sender', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function invoice_generate_sender()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
 
           $from = $this->input->post('from');
           $to = $this->input->post('to');
           $sender = $this->input->post('sender');
           $data['sender_list'] = $this->Job_delivery_model->sender_info();


            $this->session->set_userdata('sender', $sender);
           $sender1= $this->session->userdata('sender');
           $data['sender'] = $sender1;
 
           $this->session->set_userdata('date_from', $from);
           $ses_date_from = $this->session->userdata('date_from');
           $data['date_from'] = $ses_date_from;

           $this->session->set_userdata('date_to', $to);
           $ses_date_to = $this->session->userdata('date_to');
           $data['date_to'] = $ses_date_to;

           $data['result'] = $this->Search_model->do_generate_invoice_sender($from, $to, $sender);
           $data['sample'] = $this->Job_delivery_model->sample($sender); 

                   
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/generate_invoice_result_sender', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */
