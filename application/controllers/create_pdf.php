<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Create_pdf extends CI_Controller 
{
     function __construct()
     {
       parent::__construct();
        $this->load->model('job_delivery_model');

     }

// *************************** CREATE PDF Controller ***************************************************************

public function print_invoice()
{
    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
       {
         $id = $this->uri->segment(3);
        
         $data['individual'] = $this->job_delivery_model->show_individual($id);
         $data['sample'] = $this->job_delivery_model->sample($id);
         
         $this->load->view('pages/invoice_pdf', $data);
        }
   else 
        {
           redirect('login', 'refresh');
        }
}


}
/* End of file create_pdf.php */
/* Location: ./application/controllers/create_pdf.php */