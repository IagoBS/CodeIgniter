<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Formulario extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('authors_model');
    }
    public function index()
    {

        $this->load->helper('form');

        $authors = $this->authors_model->get_entries();
        $categories = $this->categories_model->get_entries();
        $data = array(
            "titulo" => "criar noticia",
            "authors" => $authors,
            "categories" => $categories
        );

        $this->template->load('template', 'formulario', $data);
    }
    public function create_news()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('author', "Seu nome", 'required');
        $this->form_validation->set_rules('dt_register', "dia/mês/ano", 'alpha');
        $this->form_validation->set_rules('category', "Selecione a categoria", 'required');
        $this->form_validation->set_rules('content', "Escreva o texto", 'required');
        $this->form_validation->set_rules('file', "escolha o arquivo", 'required');
        $this->form_validation->set_rules('send', "aaaaaa", 'alpha');
        if ($this->form_validation->run()) {
            $this->load->model('home_model');
            $data = array(
                "autor" => $this->input->post('author'),
                "registro" => $this->input->post('dt_register'),
                "categoria" => $this->input->post('category'),
                "content" => $this->input->post('content'),
                "arquivo" => $this->input->post('photo')
            );
            $this->home_model->insert($data);
            redirect(base_url('index.php/home'));
        } else {
            $this->index();
        }
    }
    public function inserted() {
        $this->index();
    }
}
