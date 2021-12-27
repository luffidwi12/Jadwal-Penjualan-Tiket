<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index(){
        $data['title'] = 'Halaman Login';
        $data['judul'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }

    public function registration(){

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run()== FALSE){
            $data['title'] = 'Halaman Registrasi';
            $data['judul'] = 'Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
        }else{
            
            // Encrypt password
                $enc_password = md5($this->input->post('password'));

                $this->Auth_model->registrasi($enc_password);

                // Set message

                redirect('auth/registration');
        }
        
    }
}