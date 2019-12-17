<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Formulario extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('authors_model');
        $this->load->model('gallery_model');
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

        $this->load->helper(['url']);
        $this->load->model('news_model');
        $this->load->library('upload');

        $data = array(
            "id_author" => $this->input->post('author'),
            "dt_register" => $this->input->post('dt_register'),
            "dt_change" => date('Y-m-d'),
            "id_category" => $this->input->post('category'),
            "title" => $this->input->post('title'),
            "content" => $this->input->post('content')
        );
        $news = $this->news_model->insert($data);

        $file_name = md5(uniqid(rand(), TRUE)) . $this->upload->data('file_ext');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('photo');
        
        $gallery_data = array(
            "id_news" => $news,
            "photo" => $file_name
        );
        $this->gallery_model->insert($gallery_data);

        // redirect('index.php/home');
    }
}
