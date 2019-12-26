<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $result = array(
            "titulo" => "Registro"
        );
        $this->template->load('template', 'signup', $result);
    }
    public function create()
    {
        $this->load->model('authors_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'pass', 'required|min_length[1]|max_length[30]');
        if ($this->form_validation->run() == FALSE) { 
        $data = array(
            "titulo" => "Registro",
            "error" => validation_errors()
        );
        $this->template->load('template', 'signup', $data);
        return;
        } else {
            $data = array(
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "pass" => md5($this->input->post('pass'))  
            );
            $this->authors_model->insert($data);
            redirect('home');
        }
    }
}
