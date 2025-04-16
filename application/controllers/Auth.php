<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('User_model');
        
    }

    public function index ($nama ='')
    {   
        $this->load->view('auth/login');
    }

    public function login()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['password'] === md5($password)) {
                $this->session->set_userdata('username', $user['username']);
                redirect('home');
            } else {
                echo "Password salah";
            }
        } else {
            echo "User tidak ditemukan";
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('auth/login');
    }
}
