<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Institucional extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('institucional_model');
        $result =  $this->institucional_model->get_entries(); 
        $data = array(
            "institucional" => $result
        );
        $this->load->view('institucional', $data);
    }

}
