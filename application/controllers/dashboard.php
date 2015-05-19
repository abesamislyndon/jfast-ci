<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');

 }

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
   
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $data);
		$this->load->view('pages/dashboard');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


