<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('news_model');
        $result = $this->news_model->get_entries();
        $date = array(
            "titulo" => "Pagina incial",
            "noticias" => $result
        );
        $this->template->load('template', 'home', $date);
    }

}
