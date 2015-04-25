<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Joblist_bank extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');


 }

	public function incoming_joblist()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    

     	$data['job_list_incoming'] = $this->job_delivery_model->show_job_incoming_list();

 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar');
		$this->load->view('pages/incoming_joblist', $data);
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


