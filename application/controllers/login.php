<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

 function index()
 {
   $this->load->view('pages/login');
 }
 
 function logout()
  {
     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('login', 'refresh');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


