<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Form extends CI_Controller {
 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');
 }

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar');
		$this->load->view('pages/form');
		$this->load->view('scaffolds/form_footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }


	public function  add_job_request()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
       if ($this->input->post('submit')) {

                $full_name     =  $this->input->post('full_name');
                $tel_no        =  $this->input->post('tel_no');
                $email         =  $this->input->post('email');
                $date_request  =  $this->input->post('date_request');
                $time 		   =  $this->input->post('time');
                $address_from  =  $this->input->post('address_from');
                $address_to    =  $this->input->post('address_to');
                $job_details   =  $this->input->post('job_details');
                $sender   =  $this->input->post('sender'); 
                $id   =  $this->input->post('id'); 

                $this->job_delivery_model->do_add_job_request($full_name, $tel_no, $email, $date_request, $time,$address_from, $address_to, $job_details, $sender, $id);        
        }

      }else
		{
			redirect('login', 'refresh');
		}	
	 
     }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


