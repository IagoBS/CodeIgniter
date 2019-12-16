<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Details extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $this->load->model('details_model');
        $result = $this->details_model->get_entries();
        $date = array(
            "titulo" => "Noticia",
            "detalhes" => $result
        );
        $this->template->load('template', 'details', $date);
    }
}