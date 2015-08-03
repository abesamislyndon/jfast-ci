<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller
{
    function __construct()
    {
      
        parent::__construct();
         
        $this->load->model('Job_delivery_model');
        $this->load->model('Search_model');
        $this->data['count_approval'] = $this->Job_delivery_model->count_approval();
        $this->data['count_jobbank']     = $this->Job_delivery_model->count_incoming_jobbank();
        $this->data['count_allocate']    = $this->Job_delivery_model->count_allocate_jobbank();
        $this->data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $this->data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();
        $sender = $this->session->userdata["logged_in"]["full_name"];   
        $this->data['count_updated_job'] = $this->Job_delivery_model->count_update_job($sender);
  

    
    }

    public function jobBank()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
   
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/search_by_jobbank', $this->data);
            $this->load->view('scaffolds/footer');

        } else {
            redirect('login', 'refresh');
        }
    }

   public function jobBank_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
        
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/search_by_jobbank_regular', $this->data);
            $this->load->view('scaffolds/regular_footer');
        } else {
            redirect('login', 'refresh');
        }
    }


   public function result_jobBank_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {

            $jobBank_id  = $this->input->get('name');
            $sender  = $this->input->get('log_id');

            $data['res'] = $this->Search_model->fetch_search_jobBank_regular($jobBank_id, $sender);
            $this->load->view('pages/search_jobbank', $data);


        } else {
            redirect('login', 'refresh');
        }
    }

    public function result_jobBank()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $jobBank_id  = $this->input->get('name');
            $data['res'] = $this->Search_model->fetch_search_jobBank($jobBank_id);
            $data["links"] = $this->pagination->create_links();
            $this->load->view('pages/search_jobBank', $data);

        } else {
            redirect('login', 'refresh');
        }
    }

    public function invoice()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {


            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/search_by_invoice', $this->data);
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function result_invoice()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $invoice_id  = $this->input->get('name');
            $data['res'] = $this->Search_model->fetch_search_invoice($invoice_id);

            $this->load->view('pages/search_invoice', $data);

        } else {
            redirect('login', 'refresh');
        }
    }

    public function invoice_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/search_by_invoice_regular', $this->data);
            $this->load->view('scaffolds/regular_footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function result_invoice_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {

            $invoice_id  = $this->input->get('name');
            $sender  = $this->input->get('log_id1');
            $data['res'] = $this->Search_model->fetch_search_invoice_regular($invoice_id, $sender);
            $this->load->view('pages/search_invoice', $data);

        } else {
            redirect('login', 'refresh');
        }
    }


  // driver search


   public function jobBank_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {

        
            $driver = $this->uri->segment(4);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_driver', $this->data, $driver);
            $this->load->view('pages/search_by_jobbank_driver', $this->data);
            $this->load->view('scaffolds/footer_driver'); 

        } else {
            redirect('login', 'refresh');
        }
    }

   public function result_jobBank_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

           $jobBank_id  = $this->input->get('name');
           $sender  = $this->input->get('log_id');

            $data['res'] = $this->Search_model->fetch_search_jobBank_driver($jobBank_id, $sender);
            $data["links"] = $this->pagination->create_links();
            $this->load->view('pages/search_jobBank', $data);

        } else {
            redirect('login', 'refresh');
        }
    }




}

/* End of file search.php */
/* Location: ./application/controllers/search.php */
