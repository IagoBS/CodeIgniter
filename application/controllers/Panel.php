<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Panel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('authors_model');
        $result = $this->authors_model->get_entries();
        $data = array(
            "titulo" => "Login/Cadastro",
            "login" => $result
        );
        $this->template->load('template', 'panel', $data);
    }
}
