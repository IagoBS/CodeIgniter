<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper();
    }
    public function index() {
        $this->load->model('redes_sociais_model');
        $this->load->model('authors_model');
        $this->load->model('news_model');
        $this->load->model('gallery_model');
        $gallery = $this->gallery_model->get_entries();
        $autores = $this->authors_model->get_entries();
        $rede_sociais = $this->redes_sociais_model->get_entries();
        $news = $this->news_model->get_entries();
        $data = array(
            "title" => "Citec",
            "redes" => $rede_sociais,
            "autores" => $autores,
            "noticias" => $news,
            "galeria" => $gallery
        );
        $this->template->load('template', 'home', $data);
    }
}