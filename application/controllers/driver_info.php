<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Driver_info extends CI_Controller
{    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Job_delivery_model');
        $this->load->model('Driver_info_model');
        $this->data['count_approval']     =  $this->Job_delivery_model->count_approval();
        $this->data['count_jobbank']      =  $this->Job_delivery_model->count_incoming_jobbank();
        $this->data['count_allocate']     =  $this->Job_delivery_model->count_allocate_jobbank();
        $this->data['count_ongoing_job']  =  $this->Job_delivery_model->count_ongoing_jobbank();
        $this->data['count_invoice_job']  =  $this->Job_delivery_model->count_invoice_jobbank();
        $data['total_invoice_job']        =  $this->Job_delivery_model->count_invoice_total();
        $sender = $this->session->userdata["logged_in"]["full_name"]; 
        $this->data['count'] = $this->Job_delivery_model->count_job_list_driver($sender);
        $this->data['count_for_job_complete'] = $this->Job_delivery_model->count_for_jobcomplete_driver($sender);
        $this->data['count_job_complete_driver'] = $this->Job_delivery_model->count_jobcomplete_driver($sender);
      
            
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id                  = $this->uri->segment(3);
            $data['individual']  = $this->Job_delivery_model->show_individual($id);
            $data['driver_info'] = $this->Driver_info_model->get_driver_info();
            
            $this->load->view('modal_form/allocate', $data);
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->Driver_info_model->get_other_info($id);
            $driver_info1 = $data[0]->address;
            echo $driver_info1;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate1()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->Driver_info_model->get_other_info1($id);
            $driver_info2 = $data[0]->company;
            echo $driver_info2;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function populate2()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->Driver_info_model->get_other_info2($id);
            $driver_info3 = $data[0]->contact_no;
            echo $driver_info3;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
  public function populate3()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id           = $this->input->post('name');
            $data         = $this->Driver_info_model->get_other_info3($id);
            $driver_info3 = $data[0]->id;
            echo $driver_info3;
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function driver_list()
    {
        
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
           
            $data['list']              = $this->Driver_info_model->get_driver_info();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/driver_list', $data);
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    
    public function add_driver()
    {
        if ($this->input->post('submit')) {
            $driver_name = $this->input->post('driver_name');
            $company     = $this->input->post('company');
            $address     = $this->input->post('address');
            $contact_num = $this->input->post('contact_num');
            
            $this->Driver_info_model->do_add_driver($driver_name, $company, $address, $contact_num);
            
        }
    }
    
    public function modal_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id                     = $this->uri->segment(3);
            $data['driver_details'] = $this->Driver_info_model->driver_details_id($id);
            
            $this->load->view('modal_form/driver', $data);
            
        } else {
            redirect('login', 'refresh');
        }
    }
    
    
    public function update_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id          = $this->input->post('id');
            $driver_name = $this->input->post('driver_name');
            $company     = $this->input->post('company');
            $address     = $this->input->post('address');
            $contact_num = $this->input->post('contact_num');
            
            $this->Driver_info_model->do_update_driver($driver_name, $company, $address, $contact_num, $id);
            
            
        } else {
            redirect('login', 'refresh');
        }
    }
    
    
    public function delete_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $id = $this->uri->segment(3);
            $this->Driver_info_model->do_delete_driver($id);
            
        } else {
            redirect('login', 'refresh');
        }
        
    }


    //******************************************** Driver Info **********************************************************//


   public function job_list(){

    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '3')
     {
        $config = array();
        $config["base_url"] = base_url().'Driver_info/ongoing_job_list';
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
        $driver = $this->uri->segment(4);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['ongoing'] = $this->Job_delivery_model->show_driver_job($config["per_page"], $driver, $page);
        $data["links"] = $this->pagination->create_links();
        
   
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_driver', $this->data, $driver);
        $this->load->view('pages/driver_job_list', $data);
        $this->load->view('scaffolds/footer'); 
     }
     else{
        redirect('login', 'refresh');
    } 

   }


       //******************************************** for job complete **********************************************************//


   public function for_job_complete(){

    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '3')
     {
        $config = array();
        $config["base_url"] = base_url().'Driver_info/ongoing_job_list';
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
        $driver = $this->uri->segment(4);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['ongoing'] = $this->Job_delivery_model->show_driver_job_complete_pending($config["per_page"], $driver, $page);
        $data["links"] = $this->pagination->create_links();
        
   
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_driver', $this->data, $driver);
        $this->load->view('pages/driver_for_job_complete', $data);
        $this->load->view('scaffolds/footer'); 
     }
     else{
        redirect('login', 'refresh');
    } 

   }

  //*********************************************** DRIUVER PROCESS ************************************************ //

  public function job_process(){
    
     if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
           
        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
     
        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();
        $data['individual_item_type'] = $this->Job_delivery_model->show_individual_item_type($id);
     
      
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_driver', $this->data);
        $this->load->view('pages/job_process_driver', $data);
        $this->load->view('scaffolds/footer');

          } else {
            redirect('login', 'refresh');
        }
   }

   public function job_for_completion(){
    
     if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
           
        $id = $this->uri->segment(3);
        $data['individual'] = $this->Job_delivery_model->show_individual($id);
     
        $data['from'] = $this->Job_delivery_model->destination();
        $data['weight'] = $this->Job_delivery_model->weight();
        $data['dimension'] = $this->Job_delivery_model->dimension();
        $data['labor'] = $this->Job_delivery_model->labor();
        $data['individual_item_type'] = $this->Job_delivery_model->show_individual_item_type($id);
     
      
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_driver', $this->data);
        $this->load->view('pages/job_for_complelete', $data);
        $this->load->view('scaffolds/footer');

          } else {
            redirect('login', 'refresh');
        }
   }

  public function job_complete(){
           if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
                
                if ($this->input->post('job_pickup')) {
                      $id = $this->input->post('job_request_id');
                      $this->Driver_info_model->do_job_pickup($id);  
                }elseif($this->input->post('submit')){
                      $id = $this->input->post('job_request_id');
                      $this->Driver_info_model->do_job_complete_driver($id);  
                }

        } else {
            redirect('login', 'refresh');
        }
    }
    
  public function driver_history(){

    if($this->session->userdata('logged_in')&&$this->session->userdata['logged_in']['role_code'] == '3')
     {
        $config = array();
        $config["base_url"] = base_url().'driver_info/driver_history';
        $config["total_rows"] = $this->Job_delivery_model->record_count();
        $config["per_page"] = 10;
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
        $driver = $this->uri->segment(4);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['ongoing'] = $this->Driver_info_model->show_driver_history($config["per_page"], $driver, $page);
        $data["links"] = $this->pagination->create_links();
        
        $this->load->view('scaffolds/header');
        $this->load->view('scaffolds/sidebar_driver', $this->data, $driver);
        $this->load->view('pages/driver_history', $data);
        $this->load->view('scaffolds/footer'); 
     }
     else{
        redirect('login', 'refresh');
    } 

   }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
