<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {


 function __construct()
 {
   parent::__construct();

 }

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar');
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


