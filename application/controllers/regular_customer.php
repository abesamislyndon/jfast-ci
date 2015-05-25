<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Regular_customer extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');

 }

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
     {
    
            
            $data['from']           = $this->job_delivery_model->destination();
            $data['weight']         = $this->job_delivery_model->weight();
            $data['dimension']      = $this->job_delivery_model->dimension();
            $data['labor']          = $this->job_delivery_model->labor();
   
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
    
        $data['from']           = $this->job_delivery_model->destination();
        $data['weight']         = $this->job_delivery_model->weight();
        $data['dimension']      = $this->job_delivery_model->dimension();
        $data['labor']          = $this->job_delivery_model->labor();
   
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
                $address          = $this->input->post('address');
                
                $this->job_delivery_model->do_add_job_request($full_name, $tel_no, $email, $date_request, $time, $job_details, $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, $labor, $labor_cost, $dimension, $dimension_cost, $address, $company_client);
            }
            
        } else {
            redirect('login', 'refresh');
        }
    }

       	public function success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
     {
    
        $data['from']           = $this->job_delivery_model->destination();
        $data['weight']         = $this->job_delivery_model->weight();
        $data['dimension']      = $this->job_delivery_model->dimension();
        $data['labor']          = $this->job_delivery_model->labor();
   
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar_regular_customer', $data);
		$this->load->view('pages/success');
	 $this->load->view('scaffolds/form_footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
   }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


