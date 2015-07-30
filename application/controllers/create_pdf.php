<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Create_pdf extends CI_Controller 
{
     function __construct()
     {
       parent::__construct();
        $this->load->model('job_delivery_model');
        $this->load->model('Search_model');

     }

// *************************** CREATE PDF Controller ***************************************************************

public function print_invoice()
{
    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
       {
         $id = $this->uri->segment(3);
        
         $data['individual'] = $this->job_delivery_model->show_individual_report($id);
         $data['sample'] = $this->job_delivery_model->sample($id);
         
         $this->load->view('pages/invoice_pdf', $data);
        }
   else 
        {
           redirect('login', 'refresh');
        }
}

public function print_invoice_regular()
{
    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
    {
         $id = $this->uri->segment(3);
        
         $data['individual'] = $this->job_delivery_model->show_individual_report($id);
         $data['sample'] = $this->job_delivery_model->sample($id);
         
         $this->load->view('pages/invoice_pdf', $data);
        }
   else 
   {
    redirect('login', 'refresh');
   }
}

public function search_report_quotation(){
    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1'){
       
         $from = $this->uri->segment(3);
         $to = $this->uri->segment(4);

         $data['from'] = $from;
         $data['to'] = $to;

         $data['result'] = $this->Search_model->do_generate_invoice($from, $to);
         $this->load->view('pages/search_report_invoice_pdf', $data);
        }
   
       else {
           redirect('login', 'refresh');
        }
   }

 public function search_report_quotation_sender(){
        if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1'){
       
         $from = $this->uri->segment(3);
         $to = $this->uri->segment(4);
         $sender = $this->uri->segment(5);

         $data['from'] = $from;
         $data['to'] = $to; 
      
         $data['result'] = $this->Search_model->do_generate_invoice_sender($from, $to, $sender);
         $this->load->view('pages/search_report_invoice_pdf', $data);
        }
   
       else {
           redirect('login', 'refresh');
        }
   }

}
/* End of file create_pdf.php */
/* Location: ./application/controllers/create_pdf.php */