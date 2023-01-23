<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this-> _rules();

        if($this->form_validation->run()==FALSE){
            $data['title'] = "Form Login";
            $this->load->view('login');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        }
       
       
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }
}
