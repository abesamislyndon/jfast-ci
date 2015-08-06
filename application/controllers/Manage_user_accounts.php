<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Manage_user_accounts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('job_delivery_model');
        $this->load->model('user');
        $this->data['count_approval'] = $this->job_delivery_model->count_approval();
        $this->data['count_jobbank']     = $this->job_delivery_model->count_incoming_jobbank();
        $this->data['count_allocate']    = $this->job_delivery_model->count_allocate_jobbank();
        $this->data['count_ongoing_job'] = $this->job_delivery_model->count_ongoing_jobbank();
        $this->data['count_invoice_job'] = $this->job_delivery_model->count_invoice_jobbank();
        $sender = $this->session->userdata["logged_in"]["full_name"];   
        $this->data['count_updated_job'] = $this->job_delivery_model->count_update_job($sender);
        $this->data['count_for_jobcomplete'] = $this->job_delivery_model->count_for_job_complete($sender);
        $this->data['count'] = $this->job_delivery_model->count_job_list_driver($sender);
        $this->data['count_for_job_complete'] = $this->job_delivery_model->count_for_jobcomplete_driver($sender);
      
            
        
    }

    /* *************************** Notification Controller ************************* */

    public function add_user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/add_new_user');
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function do_add_user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $full_name = $this->input->post('full_name');
            $company = $this->input->post('company');
            $address = $this->input->post('address');
            $contact_no = $this->input->post('contact_no');
            $username  = $this->input->post('username');
            $password  = $this->input->post('password');
            $password1 = $this->input->post('password1');
            $role_code = $this->input->post('role_code');

            if ($this->input->post('submit')) {
                $this->user->do_add_user_model($full_name, $company, $address, $contact_no, $username, $password, $password1, $role_code);
            }
        } else {
            redirect('login', 'refresh');
        }
    }

    public function account_list()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
         
            $data['list'] = $this->user->user_all_list();

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/user_list', $data);
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function update_user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $id = $this->uri->segment(3);

            $data['individual']   = $this->user->user_update_individual($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/update_user', $data);
            $this->load->view('scaffolds/footer');

        } else {
            redirect('login', 'refresh');
        }

    }

    function do_update_user()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            if ($this->input->post('submit')) {
                $this->user->do_user_update_individual();
            }
        } else {
            redirect('login', 'refresh');
        }

    }

    public function update_user_pwd()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {
            $id                        = $this->uri->segment(3);
            $data['individual']        = $this->user->user_update_individual($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar', $this->data);
            $this->load->view('pages/update_password', $data);
            $this->load->view('scaffolds/footer');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function do_update_user_pwd()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '1') {

            $id               = $this->input->post('id');
            $password         = $this->input->post('password');
            $new_password     = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            if ($this->input->post('submit')) {
                $this->user->do_user_update_pwd($id, $password, $new_password, $confirm_password);
            }
        } else {
            redirect('login', 'refresh');
        }

    }

    public function add_user_account()
    {
        $this->load->model('user');
        if ($this->input->post('submit')) {
            $this->user->do_add_user_process();
        }

        redirect('manage_user_accounts/add_user');
    }

    public function del_user()
    {
        $id     = $this->uri->segment(3);
        $delete = $this->user->do_user_del($id);
    }


// ***************************************  driver  ************************************************ //

    public function account_list_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
           
            $id = $this->session->userdata["logged_in"]["id"];
            $this->data['list'] = $this->user->user_all_list_driver($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_driver', $this->data);
            $this->load->view('pages/user_list_driver');
            $this->load->view('scaffolds/footer_driver');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function update_user_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
            $id = $this->session->userdata["logged_in"]["id"];

            $data['individual']        = $this->user->user_update_individual($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_driver', $this->data);
            $this->load->view('pages/update_user_driver', $data);
            $this->load->view('scaffolds/footer_driver');

        } else {
            redirect('login', 'refresh');
        }

    }

    function do_update_user_driver()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
            if ($this->input->post('submit')) {
                $this->user->do_user_update_individual_driver();
            }
        } else {
            redirect('login', 'refresh');
        }

    }

    public function update_user_pwd_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {
            $id = $this->session->userdata["logged_in"]["id"];
            $data['individual']        = $this->user->user_update_individual($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_driver', $this->data);
            $this->load->view('pages/update_password_driver', $data);
            $this->load->view('scaffolds/footer_driver');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function do_update_user_pwd_driver()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '3') {

            $id = $this->session->userdata["logged_in"]["id"];
            $password         = $this->input->post('password');
            $new_password     = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            if ($this->input->post('submit')) {
                $this->user->do_user_update_pwd_driver($id, $password, $new_password, $confirm_password);
            }
        } else {
            redirect('login', 'refresh');
        }

    }

// ***************************************  regular customer  ************************************************ //

    public function account_list_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
        
            $id = $this->session->userdata["logged_in"]["id"];
            $data['list']   = $this->user->user_all_list_driver($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/user_list_regular', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function update_user_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {

            $id = $this->session->userdata["logged_in"]["id"];
            $data['individual']        = $this->user->user_update_individual($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/update_user_regular', $data);
            $this->load->view('scaffolds/form_footer');

        } else {
            redirect('login', 'refresh');
        }

    }

    function do_update_user_regular()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
            if ($this->input->post('submit')) {
                $this->user->do_user_update_individual_regular();
            }
        } else {
            redirect('login', 'refresh');
        }

    }

    public function update_user_pwd_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {
        
            $id = $this->session->userdata["logged_in"]["id"];
            $data['individual']        = $this->user->user_update_individual($id);

            $this->load->view('scaffolds/header');
            $this->load->view('scaffolds/sidebar_regular_customer', $this->data);
            $this->load->view('pages/update_password_regular', $data);
            $this->load->view('scaffolds/form_footer');
        } else {
            redirect('login', 'refresh');
        }

    }

    public function do_update_user_pwd_regular()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata['logged_in']['role_code'] == '2') {

            $id = $this->session->userdata["logged_in"]["id"];
            $password         = $this->input->post('password');
            $new_password     = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            if ($this->input->post('submit')) {
                $this->user->do_user_update_pwd_regular($id, $password, $new_password, $confirm_password);
            }
        } else {
            redirect('login', 'refresh');
        }

    }

}

/* End of file Manage_user_account.php */
/* Location: ./application/controllers/Manage_user_accounts.php */
