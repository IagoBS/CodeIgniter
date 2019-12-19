<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Details extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index() {
        $this->details();
    }
    public function details() {
        $this->load->model('news_model');
        $this->load->helper('url');
        $id_news = $this->uri->segment(3);
        $news  = $this->news_model->get_news($id_news);
        $date = array(
            "news" => $news,
            "titulo" => "Noticia"
        );
        $this->template->load('template', 'details', $date);
    }
}