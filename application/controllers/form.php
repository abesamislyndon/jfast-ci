<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Form extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('job_delivery_model');
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $data['count_jobbank']  = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate'] = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            
            $data['from']           = $this->job_delivery_model->destination();
            $data['weight']         = $this->job_delivery_model->weight();
            $data['dimension']      = $this->job_delivery_model->dimension();
            $data['labor']          = $this->job_delivery_model->labor();
            
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/form', $data);
            $this->load->view('scaffolds/form_footer');
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
    public function destination()
    {
        $keyword = $_GET['term'];
        $data    = $this->job_delivery_model->do_get_cost($keyword);
        echo json_encode($data);
        flush();
    }
        
    public function add_job_request()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            if ($this->input->post('submit')) {
                
                $full_name        = $this->input->post('full_name');
                $company_client            = $this->input->post('company_client');
                $tel_no           = $this->input->post('tel_no');
                $email            = $this->input->post('email');
                $address_pickup          = $this->input->post('address_pickup');


                $full_name_deliver        = $this->input->post('full_name_deliver');
                $company_client_deliver   = $this->input->post('company_client_deliver');
                $tel_no_deliver           = $this->input->post('tel_no_deliver');
                $email_deliver            = $this->input->post('email_deliver');
                $address_deliver          = $this->input->post('address_deliver');


                $date_request     = $this->input->post('date_request');
                $time             = $this->input->post('time');
                $job_details      = $this->input->post('job_details');
                $sender           = $this->input->post('sender');
                $id               = $this->input->post('id');
                $price            = $this->input->post('price');
                $status           = $this->input->post('status');
                $destination      = $this->input->post('destination');
                $destination_cost = $this->input->post('destination_cost');
                $weight           = $this->input->post('weight');
                $weight_cost      = $this->input->post('weight_cost');
                $labor            = $this->input->post('labor');
                $labor_cost       = $this->input->post('labor_cost');
                $dimension        = $this->input->post('dimension');
                $dimension_cost   = $this->input->post('dimension_cost');


                $item_type           = $this->input->post('item_type');
                $qty_check            = $this->input->post('qty_check');
                $dimension_check          = $this->input->post('dimension_check');

                $no_trips = $this->input->post('no_trips');
                $vehicle = $this->input->post('vehicle');
               
                
                $this->job_delivery_model->do_add_job_request($full_name, $tel_no, $email, $date_request, $time, $job_details, 
                       $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, 
                       $labor, $labor_cost, $dimension, $dimension_cost, $address_pickup, $company_client,
                       $full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver, $item_type, $qty_check, $dimension_check, $no_trips, $vehicle);
            }
            
        } else {
            redirect('login', 'refresh');
        }
    }
    
    public function process_job_request()
    {
        
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            
            $job_request_id   = $this->input->post('job_request_id');
           
            $full_name        = $this->input->post('full_name');
            $company_client   = $this->input->post('company_client');
            $tel_no           = $this->input->post('tel_no');
            $email            = $this->input->post('email');
            $address_pickup          = $this->input->post('address_pickup');

            $full_name_deliver        = $this->input->post('full_name_deliver');
            $company_client_deliver   = $this->input->post('company_client_deliver');
            $tel_no_deliver           = $this->input->post('tel_no_deliver');
            $email_deliver            = $this->input->post('email_deliver');
            $address_deliver          = $this->input->post('address_deliver');
       
            $date_request     = $this->input->post('date_request');
            $time             = $this->input->post('time');
            $job_details      = $this->input->post('job_details');
            $sender           = $this->input->post('sender');
            $id               = $this->input->post('id');
            $price            = $this->input->post('price');
            $status           = $this->input->post('status');
            $destination      = $this->input->post('destination');
            $destination_cost = $this->input->post('destination_cost');
            $weight           = $this->input->post('weight');
            $weight_cost      = $this->input->post('weight_cost');
            $labor            = $this->input->post('labor');
            $labor_cost       = $this->input->post('labor_cost');
            $dimension        = $this->input->post('dimension');
            $dimension_cost   = $this->input->post('dimension_cost');

            $trip_cost   = $this->input->post('trip_cost');
          //  $no_trips   = $this->input->post('no_trips');
            
            $item_type_cost   = $this->input->post('item_type_cost');
            $item_type_id = $this->input->post('item_type_id');
            
            $vehicle = $this->input->post('vehicle');
            $vehicle_cost   = $this->input->post('vehicle_cost');
            
            if ($this->input->post('submit_update')) {
                $this->job_delivery_model->update_job_request($full_name, $company_client, $tel_no, $email, $address_pickup, $full_name_deliver, $company_client_deliver, $tel_no_deliver, $email_deliver, $address_deliver, $date_request, $time, $job_details, $sender, $id, $price, $status, $destination, $destination_cost, $weight, $weight_cost, $labor, $labor_cost, $dimension, $dimension_cost, $vehicle_cost,$trip_cost,$item_type_cost, $job_request_id, $item_type_id, $vehicle);
            }
            if ($this->input->post('submit_approved')) {

                $this->job_delivery_model->approved_job_request($job_request_id);
            }
            
            if ($this->input->post('submit_reject')) {
                $this->job_delivery_model->reject_job_request($job_request_id);
            }
            
        } else {
            redirect('login', 'refresh');
        }
        
    }
    
}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */
