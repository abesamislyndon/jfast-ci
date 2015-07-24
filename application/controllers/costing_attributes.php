<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Costing_attributes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('job_delivery_model');
        $this->load->model('costing_model');
    }

    // **************************** costing for destination  ******************************

    public function location()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['location_details']  = $this->costing_model->location_details();
            
            
       

       
            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/costing_location');
            $this->load->view('scaffolds/footer');

        } else {
            redirect('login', 'refresh');
        }

    }

    public function json_sample(){
        $id = 1;
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['location_details']  = $this->costing_model->location_details();


            $output = array(); // it will wrap all of your value
             foreach($data['location_details'] as $row){
                     unset($temp); // Release the contained value of the variable from the last loop
                     $temp = array();

                     $temp['firstname'] = $row->id;
                     $temp['lastname'] = $row->from;

                     array_push($output,$temp);
      }
                    header('Access-Control-Allow-Origin: *');
                    header("Content-Type: application/json");
                    echo json_encode($output[0]);
                        

    }

    public function add_location()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            if ($this->input->post('submit')) {

                $from = $this->input->post('from');
                $to   = $this->input->post('to');
                $cost = $this->input->post('estimated_cost');

                $this->costing_model->do_add_location($from, $to, $cost);
            }

        } else {
            redirect('login', 'refresh');
        }
    }

    public function modal_location()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id                       = $this->uri->segment(3);
            $data['location_details'] = $this->costing_model->location_details_id($id);

            $this->load->view('modal_form/location', $data);

        } else {
            redirect('login', 'refresh');
        }
    }

    public function update_location()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id   = $this->input->post('id');
            $from = $this->input->post('from');
            $to   = $this->input->post('to');
            $cost = $this->input->post('estimated_cost');

            $data['location_details'] = $this->costing_model->do_update_location($from, $to, $cost, $id);

            $this->load->view('modal_form/location', $data);

        } else {
            redirect('login', 'refresh');
        }

    }

    public function delete_location()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {


            $id = $this->uri->segment(3);
            $this->costing_model->do_delete_location($id);


        } else {
            redirect('login', 'refresh');
        }

    }

    // ****************************   costing for  weight  ******************************

    public function weight()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['weight_details']    = $this->costing_model->weight_details();

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/costing_weight');
            $this->load->view('scaffolds/footer');

        } else {
            redirect('login', 'refresh');
        }

    }

    public function add_weight()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            if ($this->input->post('submit')) {

                $weight = $this->input->post('weight');
                $cost   = $this->input->post('cost');

                $this->costing_model->do_add_weight($weight, $cost);
            }

        } else {
            redirect('login', 'refresh');
        }
    }

    public function modal_weight()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id                     = $this->uri->segment(3);
            $data['weight_details'] = $this->costing_model->weight_details_id($id);

            $this->load->view('modal_form/weight', $data);

        } else {
            redirect('login', 'refresh');
        }
    }

    public function update_weight()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id     = $this->input->post('id');
            $weight = $this->input->post('weight');
            $cost   = $this->input->post('cost');

            $data['weight_details'] = $this->costing_model->do_update_weight($weight, $cost, $id);

            $this->load->view('modal_form/weight', $data);

        } else {
            redirect('login', 'refresh');
        }

    }

    public function delete_weight()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {


            $id = $this->uri->segment(3);
            $this->costing_model->do_delete_weight($id);


        } else {
            redirect('login', 'refresh');
        }

    }


    // ****************************   costing for  Dimension  ******************************

    public function dimension()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['dimension_details'] = $this->costing_model->dimension_details();

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/costing_dimension');
            $this->load->view('scaffolds/footer');

        } else {
            redirect('login', 'refresh');
        }

    }

    public function add_dimension()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            if ($this->input->post('submit')) {

                $dimension = $this->input->post('dimension');
                $cost      = $this->input->post('cost');

                $this->costing_model->do_add_dimension($dimension, $cost);
            }

        } else {
            redirect('login', 'refresh');
        }
    }

    public function modal_dimension()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id                        = $this->uri->segment(3);
            $data['dimension_details'] = $this->costing_model->dimension_details_id($id);

            $this->load->view('modal_form/dimension', $data);

        } else {
            redirect('login', 'refresh');
        }
    }

    public function update_dimension()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id        = $this->input->post('id');
            $dimension = $this->input->post('dimension');
            $cost      = $this->input->post('cost');

            $data['dimension_details'] = $this->costing_model->do_update_dimension($dimension, $cost, $id);

            $this->load->view('modal_form/dimension', $data);

        } else {
            redirect('login', 'refresh');
        }

    }

    public function delete_dimension()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {


            $id = $this->uri->segment(3);
            $this->costing_model->do_delete_dimension($id);


        } else {
            redirect('login', 'refresh');
        }

    }


    // ****************************   costing for  labor  ******************************

    public function labor()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
            $data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
            $data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
            $data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
            $data['labor_details']     = $this->costing_model->labor_details();

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $data);
            $this->load->view('pages/costing_labor');
            $this->load->view('scaffolds/footer');

        } else {
            redirect('login', 'refresh');
        }

    }

    public function add_labor()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            if ($this->input->post('submit')) {

                $labor = $this->input->post('labor');
                $cost  = $this->input->post('cost');

                $this->costing_model->do_add_labor($labor, $cost);
            }

        } else {
            redirect('login', 'refresh');
        }
    }

    public function modal_labor()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id                    = $this->uri->segment(3);
            $data['labor_details'] = $this->costing_model->labor_details_id($id);

            $this->load->view('modal_form/labor', $data);

        } else {
            redirect('login', 'refresh');
        }
    }

    public function update_labor()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id    = $this->input->post('id');
            $labor = $this->input->post('labor');
            $cost  = $this->input->post('cost');

            $data['labor_details'] = $this->costing_model->do_update_labor($labor, $cost, $id);

            $this->load->view('modal_form/labor', $data);

        } else {
            redirect('login', 'refresh');
        }

    }

    public function delete_labor()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {


            $id = $this->uri->segment(3);
            $this->costing_model->do_delete_labor($id);


        } else {
            redirect('login', 'refresh');
        }
    }

}

/* End of file conting_attributes.php */
/* Location: ./application/controllers/Costing_attributes.php */
