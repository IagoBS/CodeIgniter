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
        $data = array(
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "pass" => md5($this->input->post('pass'))  
        );
        $this->authors_model->insert($data);
        redirect('home');
    }
}
