<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RedesSociais extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $this->load->model('redes_sociais_model');
        $result = $this->redesSociais_model->get_entries();
        $redes = array(
            "result" => $result
        );
        $this->load->view('redes_sociais');
    } 
}