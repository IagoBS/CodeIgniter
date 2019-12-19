<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class List_news extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('authors_model');
    }
    public function index() {
        
        $this->category_get();
    }
    public function category_get() {
        $this->load->model('news_model');
        $this->load->helper('url');
        $id_category = $this->uri->segment(3);
        $news  = $this->news_model->filter_news($id_category);
        $date = array(
            "news" => $news,
            "titulo" => "Noticia"
        );
        $this->template->load('template', 'list', $date);
    }
}