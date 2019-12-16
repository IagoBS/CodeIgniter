<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Redes extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
      $this->load->model('redes_sociais_model');
      $result = $this->redes_sociais_model->get_entries();
      $date_sociais = array(
          "redes" => $result
      );
    }
}