<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Success extends CI_Controller 
{


  function __construct()
 {
    parent::__construct();
    $this->load->model('job_delivery_model');
    $this->data['count_approval']     =  $this->job_delivery_model->count_approval();
    $this->data['count_jobbank']      =  $this->job_delivery_model->count_incoming_jobbank();
    $this->data['count_allocate']     =  $this->job_delivery_model->count_allocate_jobbank();
    $this->data['count_ongoing_job']  =  $this->job_delivery_model->count_ongoing_jobbank();
    $this->data['count_invoice_job']  =  $this->job_delivery_model->count_invoice_jobbank();
    $data['total_invoice_job']        =  $this->job_delivery_model->count_invoice_total();
    $sender = $this->session->userdata["logged_in"]["full_name"]; 
    $this->data['count'] = $this->job_delivery_model->count_job_list_driver($sender);
    $this->data['count_for_job_complete'] = $this->job_delivery_model->count_for_jobcomplete_driver($sender);
    $this->data['count_job_complete_driver'] = $this->job_delivery_model->count_jobcomplete_driver($sender);
      
           


 }

	function job_bank_success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
        $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $this->data);
		$this->load->view('pages/job_bank_success');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

 function job_allocate_success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
      
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $this->data);
		$this->load->view('pages/job_allocate_success');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
    }

 function job_complete_success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
     
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $this->data);
		$this->load->view('pages/job_complete_success');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

 function job_invoice_success()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
     
        $id = $this->uri->segment(3);
        $data['invoice_details'] = $this->job_delivery_model->invoice_details($id);

 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $this->data);
		$this->load->view('pages/job_invoice_success', $data);
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

 function job_bank_reject()
   {	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
    
        $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $this->data);
		$this->load->view('pages/job_bank_reject');
		$this->load->view('scaffolds/footer');
        
     }else
     {
			redirect('login', 'refresh');
		}	
	 
   }


// *************************************************** driver ********************************************************//

 function job_complete_success_driver()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '3')
     {
    
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar_driver', $this->data);
		$this->load->view('pages/job_complete_success_driver');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
       }

        function job_driver_pickup()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '3')
     {
    
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar_driver', $this->data);
		$this->load->view('pages/job_pickup_driver');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
       }

}

/* End of file success.php */
/* Location: ./application/controllers/success.php */


