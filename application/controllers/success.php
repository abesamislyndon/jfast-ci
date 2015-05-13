<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Success extends CI_Controller {


 function __construct()
 {
    parent::__construct();
   $this->load->model('job_delivery_model');

 }

	public function job_bank_success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();

 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $data);
		$this->load->view('pages/job_bank_success');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

}

/* End of file success.php */
/* Location: ./application/controllers/success.php */

