<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Quem extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $this->load->model('quem_somos_model');
        $result = $this->quem_somos_model->get_entries();
        $date = array(
            "quem_somoss" => $result
        );
        $this->template->load('template', 'quem_somos', $date);
    }
}