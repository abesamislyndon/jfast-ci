<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {


 function __construct()
 {
    parent::__construct();
    $this->load->model('Job_delivery_model');
    $this->load->model('Date_model');
    $this->data['count_approval'] = $this->Job_delivery_model->count_approval();
    $this->data['count_jobbank']     = $this->Job_delivery_model->count_incoming_jobbank();
    $this->data['count_allocate']    = $this->Job_delivery_model->count_allocate_jobbank();
    $this->data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
    $this->data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();
    $data['total_invoice_job'] = $this->Job_delivery_model->count_invoice_total();


}

	public function index()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {

        $date =  date("Y"); 
        $data['jan_reject']     = $this->Date_model->reject_jan($date);
        $data['feb_reject']     = $this->Date_model->reject_feb($date);
        $data['march_reject']   = $this->Date_model->reject_march($date);
        $data['april_reject']   = $this->Date_model->reject_april($date);
        $data['may_reject']     = $this->Date_model->reject_may($date);
        $data['jun_reject']     = $this->Date_model->reject_jun($date);
        $data['july_reject']    = $this->Date_model->reject_july($date);
        $data['aug_reject']     = $this->Date_model->reject_aug($date);
        $data['sept_reject']    = $this->Date_model->reject_sept($date);
        $data['oct_reject']     = $this->Date_model->reject_oct($date);
        $data['nov_reject']     = $this->Date_model->reject_nov($date);
        $data['dec_reject']     = $this->Date_model->reject_dec($date);

        $data['jan_aprov']      = $this->Date_model->aprov_jan($date);
        $data['feb_aprov']      = $this->Date_model->aprov_feb($date);
        $data['march_aprov']    = $this->Date_model->aprov_march($date);
        $data['april_aprov']    = $this->Date_model->aprov_april($date);
        $data['may_aprov']      = $this->Date_model->aprov_may($date);
        $data['jun_aprov']      = $this->Date_model->aprov_jun($date);
        $data['july_aprov']     = $this->Date_model->aprov_july($date);
        $data['aug_aprov']      = $this->Date_model->aprov_aug($date);
        $data['sept_aprov']     = $this->Date_model->aprov_sept($date);
        $data['oct_aprov']      = $this->Date_model->aprov_oct($date);
        $data['nov_aprov']      = $this->Date_model->aprov_nov($date);
        $data['dec_aprov']      = $this->Date_model->aprov_dec($date);
   
 	    $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $this->data);
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


