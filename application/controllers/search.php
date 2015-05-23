<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');
   $this->load->model('search_model');

 }
  
  public function jobBank()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {

       
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();
        $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
        $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
   
 	      $this->load->view('scaffolds/header');
	      $this->load->view('scaffolds/sidebar', $data);
		    $this->load->view('pages/search_by_jobbank', $data);
		    $this->load->view('scaffolds/footer');
     }else{
			redirect('login', 'refresh');
		}	 
   }
   public function result_jobBank(){
 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $config = array();
        $config["base_url"] = base_url().'search/esult_jobBank';
        $config["total_rows"] = $this->job_delivery_model->record_count();
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

        $jobBank_id = $this->input->get('name');
        $data['res'] = $this->search_model->fetch_search_jobBank($jobBank_id);

      //  $data['job_list_incoming'] = $this->job_delivery_model->show_job_incoming_list($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

       

        $this->load->view('pages/search_jobbank', $data);

     
      }else{
      redirect('login', 'refresh');
    }  
   }
}

/* End of file search.php */
/* Location: ./application/controllers/search.php */


