<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Costing_attributes extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');
   $this->load->model('costing_model');
 }

 // **************************** costing for destination  ******************************

	public function location()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
        $data['location_details'] = $this->costing_model->location_details();
   
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $data);
		$this->load->view('pages/costing_location');
		$this->load->view('scaffolds/footer');
        
     }else
		{
			redirect('login', 'refresh');
		}	
	 
   }

    public function add_location()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            if ($this->input->post('submit')) {
                
                $from        = $this->input->post('from');
                $to           = $this->input->post('to');
                $cost           = $this->input->post('estimated_cost');
                
                $this->costing_model->do_add_location($from, $to, $cost);
            }
            
        } else {
            redirect('login', 'refresh');
        }
    }

    public function modal_location()  {
      if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id = $this->uri->segment(3);
            $data['location_details'] = $this->costing_model->location_details_id($id);
            
            $this->load->view('modal_form/location', $data);
            
        } else {
            redirect('login', 'refresh');
        }
    }

    public function update_location(){
      if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id = $this->input->post('id');
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            $cost = $this->input->post('estimated_cost');

            $data['location_details'] = $this->costing_model->do_update_location($from, $to, $cost, $id);
            
            $this->load->view('modal_form/location', $data);
            
        } else {
            redirect('login', 'refresh');
        }

    }

    public function delete_location(){
      if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            

            $id     = $this->uri->segment(3);
            $this->costing_model->do_delete_location($id);
            
           
        } else {
            redirect('login', 'refresh');
        }

    }

    // ****************************  end of costing for destination  ******************************


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


