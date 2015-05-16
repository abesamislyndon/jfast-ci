<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Joblist_bank extends CI_Controller {


 function __construct()
 {
   parent::__construct();
   $this->load->model('job_delivery_model');
 }

	public function incoming_joblist()
	{	
	 if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '1')
     {
        $config = array();
        $config["base_url"] = base_url().'joblist_bank/incoming_joblist';
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
       	$data['job_list_incoming'] = $this->job_delivery_model->show_job_incoming_list($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();

   
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
       	$data['allocate'] = $this->job_delivery_model->show_allocate_job_list($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();
   
	      $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar', $data);
	      $this->load->view('pages/allocate_joblist', $data);
	      $this->load->view('scaffolds/footer'); 
     }
     else{
			  redirect('login', 'refresh');
		}	

   }

    public function individual(){

    	$id = $this->uri->segment(3);
        $data['individual'] = $this->job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();

        $data['from'] = $this->job_delivery_model->destination();
        $data['weight'] = $this->job_delivery_model->weight();
        $data['dimension'] = $this->job_delivery_model->dimension();
        $data['labor'] = $this->job_delivery_model->labor();


        $this->load->view('scaffolds/header');
	      $this->load->view('scaffolds/sidebar', $data);
	      $this->load->view('pages/individual', $data);
		    $this->load->view('scaffolds/form_footer');
   }

    public function individualAllocate(){

   		  $id = $this->uri->segment(3);
        $data['individual'] = $this->job_delivery_model->show_individual($id);
        $data['count_jobbank'] = $this->job_delivery_model->count_incoming_jobbank();
        $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();

        $data['from'] = $this->job_delivery_model->destination();
        $data['weight'] = $this->job_delivery_model->weight();
        $data['dimension'] = $this->job_delivery_model->dimension();
        $data['labor'] = $this->job_delivery_model->labor();
   
        $this->load->view('scaffolds/header');
	      $this->load->view('scaffolds/sidebar', $data);
	      $this->load->view('pages/individualAllocate', $data);
		    $this->load->view('scaffolds/footer');
   }


    public function choose_allocate_individual()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
//            $id                      = $this->uri->segment(3);
  //          $data['category']        = $this->category_model->show_category();
    //        $data['item_individual'] = $this->item_model->get_item($id);
            
            
            $this->load->view('modal_form/allocate', $data);
        } else {
            redirect('login', 'refresh');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


