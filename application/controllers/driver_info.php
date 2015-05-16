<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Driver_info extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');
   $this->load->model('driver_info_model');

 }

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
        $data['driver_info'] = $this->driver_info_model->get_driver_info();
      
 		$this->load->view('modal_form/allocate', $data);
	    
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


