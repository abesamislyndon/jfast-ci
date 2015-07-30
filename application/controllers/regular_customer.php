<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Regular_customer extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('Job_delivery_model');
   $this->load->model('Search_model');
 }

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
         
        $sender = $this->session->userdata["logged_in"]["full_name"]; 
        $data['from']           = $this->Job_delivery_model->destination();
        $data['weight']         = $this->Job_delivery_model->weight();
        $data['dimension']      = $this->Job_delivery_model->dimension();
        $data['labor']          = $this->Job_delivery_model->labor();
        $data['result'] = $this->Search_model->fetch_all_jobBank_regular($sender);
        $sender = $this->session->userdata["logged_in"]["full_name"];
        $data['count_jobbank'] = $this->Job_delivery_model->regualar_view_updated_price($sender);


 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar_regular_customer', $data);
		$this->load->view('pages/dashboard_regular_customer');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
   }


  public function form()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
     {
        $sender = $this->session->userdata["logged_in"]["full_name"]; 
        $data['from']           = $this->Job_delivery_model->destination();
        $data['weight']         = $this->Job_delivery_model->weight();
        $data['dimension']      = $this->Job_delivery_model->dimension();
        $data['labor']          = $this->Job_delivery_model->labor();
        $sender = $this->session->userdata["logged_in"]["full_name"];
        $data['count_jobbank'] = $this->Job_delivery_model->regualar_view_updated_price($sender);
      
   
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar_regular_customer', $data);
		$this->load->view('pages/form_regular');
	   $this->load->view('scaffolds/form_footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
   }

    public function add_job_request()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
            
           if ($this->input->post('submit')) {
                
                $full_name        = $this->input->post('full_name');
                $company_client            = $this->input->post('company_client');
                $tel_no           = $this->input->post('tel_no');
                $email            = $this->input->post('email');
                $address_pickup          = $this->input->post('address_pickup');


                $full_name_deliver        = $this->input->post('full_name_deliver');
                $company_client_deliver   = $this->input->post('company_client_deliver');
                $tel_no_deliver           = $this->input->post('tel_no_deliver');
                $email_deliver            = $this->input->post('email_deliver');
                $address_deliver          = $this->input->post('address_deliver');


                $date_request     = $this->input->post('date_request');
                $time             = $this->input->post('time');
                $job_details      = $this->input->post('job_details');
                $sender           = $this->input->post('sender');
                $id               = $this->input->post('id');
                $price            = $this->input->post('price');
                $status           = $this->input->post('status');
                $destination      = $this->input->post('destination');
                $destination_cost = $this->input->post('destination_cost');
                $weight           = $this->input->post('weight');
                $weight_cost      = $this->input->post('weight_cost');
                $labor            = $this->input->post('labor');
                $labor_cost       = $this->input->post('labor_cost');
                $dimension        = $this->input->post('dimension');
                $dimension_cost   = $this->input->post('dimension_cost');


                $item_type           = $this->input->post('item_type');
                $qty_check            = $this->input->post('qty_check');
                $dimension_check          = $this->input->post('dimension_check');

                $no_trips = $this->input->post('no_trips');
                $vehicle = $this->input->post('vehicle');
               
                
                $this->Job_delivery_model->do_add_job_request($full_name, $tel_no, $email, $date_request, $time, $job_details, 
                       $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, 
                       $labor, $labor_cost, $dimension, $dimension_cost, $address_pickup, $company_client,
                       $full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver, $item_type, $qty_check, $dimension_check, $no_trips, $vehicle);
            }
            
        } else {
            redirect('login', 'refresh');
        }
    }

   public function success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
     {
    
        $data['from']           = $this->Job_delivery_model->destination();
        $data['weight']         = $this->Job_delivery_model->weight();
        $data['dimension']      = $this->Job_delivery_model->dimension();
        $data['labor']          = $this->Job_delivery_model->labor();
        $sender = $this->session->userdata["logged_in"]["full_name"];
        $data['count_jobbank'] = $this->Job_delivery_model->regualar_view_updated_price($sender);
   
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar_regular_customer', $data);
		$this->load->view('pages/success');
	 $this->load->view('scaffolds/form_footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
   }


    public function view_job_request_price()
    {   
     if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
     {

        $config                     = array();
        $config["base_url"]         = base_url().'joblist_bank/incoming_joblist';
        $config["total_rows"]       = $this->Job_delivery_model->record_count();
        $config["per_page"]         = 8;
        $config["uri_segment"]      = 3;
        $config['full_tag_open']    = "<ul class='pagination pagination-sm no-margin pull-right'>";
        $config['full_tag_close']   = "</ul>";
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open']    = "<li>";
        $config['next_tagl_close']  = "</li>";
        $config['prev_tag_open']    = "<li>";
        $config['prev_tagl_close']  = "</li>";
        $config['first_tag_open']   = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open']    = "<li>";
        $config['last_tagl_close']  = "</li>";

        $this->pagination->initialize($config);
        $sender                 = $this->session->userdata["logged_in"]["full_name"];
        $page                   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['request_job']    = $this->Job_delivery_model->my_job_request_price($config["per_page"], $page, $sender);
        $data["links"]          = $this->pagination->create_links();
        $data['from']           = $this->Job_delivery_model->destination();
        $data['weight']         = $this->Job_delivery_model->weight();
        $data['dimension']      = $this->Job_delivery_model->dimension();
        $data['labor']          = $this->Job_delivery_model->labor();
        $data['count_jobbank']  = $this->Job_delivery_model->regualar_view_updated_price($sender);
        
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_regular_customer', $data);
        $this->load->view('pages/job_request_price', $data);
        $this->load->view('scaffolds/form_footer');
        
     }
     else{
            redirect('login', 'refresh');
        }   
   }

    public function view_job_request(){

        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['individual_item_type'] = $this->Job_delivery_model->show_individual_item_type($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();

        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_regular_customer', $data);
        $this->load->view('pages/individual_regular_customer', $data);
        $this->load->view('scaffolds/form_footer');
   }



}

/* End of file Regular_customer.php */
/* Location: ./application/controllers/Regular_customer.php */


