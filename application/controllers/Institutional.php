<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Institutional extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $this->load->model('institutional_model');
        $result = $this->institutional_model->get_entries();
        $data = array(
            "titulo" => "Quem Somos",
            "sobre" => $result
        );
        $this->template->load('template', 'institutional', $data);
    }
}