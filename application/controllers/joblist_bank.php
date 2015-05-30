<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Joblist_bank extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('Job_delivery_model');
 }

	public function incoming_joblist()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $config = array();
        $config["base_url"] = base_url().'joblist_bank/incoming_joblist';
        $config["total_rows"] = $this->Job_delivery_model->record_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination pagination-sm no-margin pull-right'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
 		$config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       	$data['job_list_incoming'] = $this->Job_delivery_model->show_job_incoming_list($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

   
 	      $this->load->view('scaffolds/header');
	      $this->load->view('scaffolds/sidebar', $data);
		    $this->load->view('pages/incoming_joblist', $data);
		    $this->load->view('scaffolds/footer');
        
     }
     else{
			redirect('login', 'refresh');
		}	
   }

   public function allocate_joblist(){

   	if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $config = array();
        $config["base_url"] = base_url().'joblist_bank/allocate_joblist';
        $config["total_rows"] = $this->Job_delivery_model->record_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination pagination-sm no-margin pull-right'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
 		$config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       	$data['allocate'] = $this->Job_delivery_model->show_allocate_job_list($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();
   
	      $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
	      $this->load->view('pages/allocate_joblist', $data);
	      $this->load->view('scaffolds/footer'); 
     }
     else{
			  redirect('login', 'refresh');
		}	

   }

    public function ongoing_job_list(){

    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $config = array();
        $config["base_url"] = base_url().'joblist_bank/ongoing_job_list';
        $config["total_rows"] = $this->Job_delivery_model->record_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination pagination-sm no-margin pull-right'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['ongoing'] = $this->Job_delivery_model->show_ongoing_job($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();
   
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
        $this->load->view('pages/ongoing_joblist', $data);
        $this->load->view('scaffolds/footer'); 
     }
     else{
        redirect('login', 'refresh');
    } 

   }

  public function job_invoice_list(){

    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $config = array();
        $config["base_url"] = base_url().'joblist_bank/job_invoice_list';
        $config["total_rows"] = $this->Job_delivery_model->record_count();
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = "<ul class='pagination pagination-sm no-margin pull-right'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['ongoing'] = $this->Job_delivery_model->show_invoice_job($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();
   
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
        $this->load->view('pages/invoice_joblist', $data);
        $this->load->view('scaffolds/footer'); 
     }
     else{
        redirect('login', 'refresh');
    } 

   }


    public function individual(){

    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {     

    	$id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();

        $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $data);
	    $this->load->view('pages/individual', $data);
		$this->load->view('scaffolds/form_footer');

        } else {
            redirect('login', 'refresh');
        }

   }

   public function individual_search(){

   if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {      

        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();

        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
        $this->load->view('pages/individual_search', $data);
        $this->load->view('scaffolds/form_footer');

          } else {
            redirect('login', 'refresh');
        }
   }

    public function individual_search_regular(){

   if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '2')
     {      

        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();

        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_regular_customer', $data);
        $this->load->view('pages/individual_search_regular', $data);
        $this->load->view('scaffolds/form_footer');

          } else {
            redirect('login', 'refresh');
        }
   }

    public function individualAllocate(){

     if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {    

   		$id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();
   
        $this->load->view('scaffolds/header');
	    $this->load->view('scaffolds/sidebar', $data);
	    $this->load->view('pages/individualAllocate', $data);
		$this->load->view('scaffolds/footer');
       
        } else {
            redirect('login', 'refresh');
        }      
    }

    public function choose_allocate_individual()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {  
            $id = $this->uri->segment(3);
            $data['individual'] = $this->Job_delivery_model->show_individual($id);         
            $this->load->view('modal_form/allocate', $data);
        } else {
            redirect('login', 'refresh');
        }
    }

    public function add_allocate(){
         if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
               
                $job_bank_id     = $this->input->post('job_bank_id');
                $name            = $this->input->post('name');
                $address         = $this->input->post('address');
                $contact_num     = $this->input->post('contact_num');

                $this->Job_delivery_model->do_add_allocate($job_bank_id, $name, $address, $contact_num);
            
        } else {
            redirect('login', 'refresh');
        }
    }

    public function individualOngoing(){

        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();
   
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
        $this->load->view('pages/individualOngoing', $data);
        $this->load->view('scaffolds/footer');
   }

    public function job_complete(){
           if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
                $id = $this->input->post('job_request_id');
                $this->Job_delivery_model->do_job_complete($id);
            
        } else {
            redirect('login', 'refresh');
        }
    }

  public function individual_invoice(){

        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->Job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->Job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->Job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->Job_delivery_model->count_invoice_jobbank();

        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();
   
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
        $this->load->view('pages/individual_invoice', $data);
        $this->load->view('scaffolds/footer');
   }


       public function job_invoice(){
           if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
                $id = $this->input->post('job_request_id');
                $this->Job_delivery_model->do_job_invoice($id);
            
        } else {
            redirect('login', 'refresh');
        }
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


