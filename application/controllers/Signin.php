<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Signin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array(
            "titulo" => "login"
        );
        $this->template->load('template', 'signin', $data);
    }
    public function logar()
    {
        $this->load->model('authors_model');

        $email =  $this->input->post('email');
        $pass = md5($this->input->post('pass'));
        $result = $this->authors_model->get_entry($email);
        if(!isset($result[0])) {
            $data = array(
                "titulo" => "Login",
                "error" => "Email ou senha inválido"
            );
            $this->template->load('template', 'signin', $data);
            return;
        } 
        if($pass === $result[0]->pass) {
            $data = array(
                "email" => $result[0]->email,
                "id" => $result[0]->id,
                "nome" => $result[0]->name,
                "logged_in" => TRUE
            );
            $this->session->set_userdata($data);
            redirect("home");

        } else {
            $data = array(
                "titulo" => "Login",
                "error" => "Email ou senha inválido"
            );
            $this->template->load('template', 'signin', $data);
            
        } 
        
        
    }
}
