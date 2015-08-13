<?php
Class User extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            
            return $query->result();
        } else {
            return false;
        }
    }
    
    function salesman()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role_code', '3');
        $query = $this->db->get();
        return $query->result();
    }
    
    function user_all_list()
    {
        $this->db->select('*');
        $this->db->from('users')->order_by('role_code');
        $query = $this->db->get();
        return $query->result();
    }
    function user_all_list_driver($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('users')->order_by('role_code');
        $query = $this->db->get();
        return $query->result();
    }
    function user_update_individual($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function do_user_update_individual()
    {
        
        $id        = $this->input->post('id');
        $full_name = $this->input->post('full_name');
        $company = $this->input->post('company');
        $address = $this->input->post('address');
        $contact_no = $this->input->post('contact_no');
        $hp_no = $this->input->post('hp_no');
        $fax_no = $this->input->post('fax_no');
        $email = $this->input->post('email');
        $username  = $this->input->post('username');
        $role_code = $this->input->post('role_code');
        //$password  = $this->input->post('password');
        
        $data = array(
            'full_name' => $full_name,
            'username' => $username,
            'company' => $company,
            'address' => $address,
            'contact_no' => $contact_no,
            'hp_no' => $hp_no,
            'fax_no' => $fax_no,
            'email' => $email,
    
       //     'password' => md5($password),
            'role_code' => $role_code
        );
        
        $this->db->where('id', $id);
        $this->db->update('users', $data);


        $data = array(
            'sender' => $full_name,
        );
        
        $this->db->where('sender_id', $id);
        $this->db->update('job_delivery', $data);

        $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATED USER');
        redirect('manage_user_accounts/update_user/' . $id);
    }

   function do_user_update_individual_driver()
    {
        
        $id        = $this->input->post('id');
        $full_name = $this->input->post('full_name');
        $company = $this->input->post('company');
        $address = $this->input->post('address');
        $contact_no = $this->input->post('contact_no');
        $username  = $this->input->post('username');
        $role_code = $this->input->post('role_code');
        //$password  = $this->input->post('password');
        
        $data = array(
            'full_name' => $full_name,
            'username' => $username,
            'company' => $company,
            'address' => $address,
            'contact_no' => $contact_no,
           'role_code' => 3
        );
        
        $this->db->where('id', $id);
        $this->db->update('users', $data);


      $data = array(
            'sender' => $full_name,
        );
        
        $this->db->where('sender_id', $id);
        $this->db->update('job_delivery', $data);

        $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATED USER');
        redirect('manage_user_accounts/update_user_driver/' . $id);
    }
    
    function do_user_update_individual_regular()
    {
        
        $id        = $this->input->post('id');
        $full_name = $this->input->post('full_name');
        $company = $this->input->post('company');
        $address = $this->input->post('address');
        $contact_no = $this->input->post('contact_no');
        $username  = $this->input->post('username');
        $role_code = $this->input->post('role_code');
        //$password  = $this->input->post('password');
        
        $data = array(
            'full_name' => $full_name,
            'username' => $username,
            'company' => $company,
            'address' => $address,
            'contact_no' => $contact_no,
           'role_code' => 2
        );
        
        $this->db->where('id', $id);
        $this->db->update('users', $data);


      $data = array(
            'sender' => $full_name,
        );
        
        $this->db->where('sender_id', $id);
        $this->db->update('job_delivery', $data);

        $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATED USER');
        redirect('manage_user_accounts/update_user_regular/' . $id);
    }

    function do_user_update_pwd($id, $password, $new_password, $confirm_password)
    {
        
        $query = $this->db->query("select * from users where id=" . $id);
        
        foreach ($query->result() as $value) {
            
            $db_password = $value->password;
            $db_id       = $value->id;
            
        }
        if ((md5($password) == $db_password) && ($new_password == $confirm_password)) {
            
            $data = array(
                'password' => md5($new_password)
            );
            
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATED PASSWORD USER');
            redirect('manage_user_accounts/update_user_pwd/' . $id);
        } else {
            $this->session->set_flashdata('msg', 'DID NOT MATCH NEW PASSSWORD OR OLD PASSWORD PROBLEM');
            redirect('manage_user_accounts/update_user_pwd/' . $id);
        }
    }
    

    function do_user_update_pwd_driver($id, $password, $new_password, $confirm_password)
    {
        
        $query = $this->db->query("select * from users where id=" . $id);
        
        foreach ($query->result() as $value) {
            
            $db_password = $value->password;
            $db_id       = $value->id;
            
        }
        if ((md5($password) == $db_password) && ($new_password == $confirm_password)) {
            
            $data = array(
                'password' => md5($new_password)
            );
            
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATED PASSWORD USER');
            redirect('manage_user_accounts/update_user_pwd_driver/' . $id);
        } else {
            $this->session->set_flashdata('msg', 'DID NOT MATCH NEW PASSSWORD OR OLD PASSWORD PROBLEM');
            redirect('manage_user_accounts/update_user_pwd_driver/' . $id);
        }
    }

  function do_user_update_pwd_regular($id, $password, $new_password, $confirm_password)
    {
        
        $query = $this->db->query("select * from users where id=" . $id);
        
        foreach ($query->result() as $value) {
            
            $db_password = $value->password;
            $db_id       = $value->id;
            
        }
        if ((md5($password) == $db_password) && ($new_password == $confirm_password)) {
            
            $data = array(
                'password' => md5($new_password)
            );
            
            $this->db->where('id', $id);
            $this->db->update('users', $data);
            $this->session->set_flashdata('msg', 'SUCCESFULLY UPDATED PASSWORD USER');
            redirect('manage_user_accounts/update_user_pwd_regular/' . $id);
        } else {
            $this->session->set_flashdata('msg', 'DID NOT MATCH NEW PASSSWORD OR OLD PASSWORD PROBLEM');
            redirect('manage_user_accounts/update_user_pwd_regular/' . $id);
        }
    }
    
 function do_add_user_model($full_name,$company,$address,$contact_no, $hp_no, $fax_no, $email, $username, $password, $password1, $role_code)
    {
        
        $data = array(
            'full_name' => $full_name,
            'company' => $company,
            'address' => $address,
            'contact_no' => $contact_no,
            'hp_no' => $hp_no,
            'fax_no' => $fax_no,
            'email' => $email,
           
            'username' => $username,
            'password' => md5($password),
            'role_code' => $role_code
        );
        if ($password == $password1) {
            $qry = $this->db->select('username')->from('users')->where('username', $username)->get();
            
            if ($qry->num_rows == 0) {
                $this->db->insert('users', $data);
                $this->session->set_flashdata('msg', 'SUCCESFULLY ADDED USER');
                redirect('manage_user_accounts/add_user');
                
            } else {
                $this->session->set_flashdata('msg', 'username already exist');
            }
        } else {
            $this->session->set_flashdata('msg', 'Password does not Match');
            redirect('manage_user_accounts/add_user');
        }
    }
     
    function do_user_del($id)
    {
        
        $this->db->where('id', $id);
        $this->db->delete('users');
        
        $this->session->set_flashdata('msg', 'SUCCESSFULLY DELETE');
        redirect('manage_user_accounts/account_list');
    }
    
    
}

/* End of file user.php */
/* Location: ./application/models/user.php */