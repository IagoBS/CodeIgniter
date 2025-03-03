<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Formulario extends MY_Controller
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
            "categories" => $categories,
        );
        $this->template->load('template', 'formulario', $data);
    }
    public function create_news()
    {
        $this->load->helper(['url']);
        $this->load->model('news_model');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('dt_register', 'dt_register', 'required',   array('required' => 'Você deve preencher a data.'));
        $this->form_validation->set_rules('category', 'category', 'required',   array('required' => 'Você deve preencher a categoria.'));
        $this->form_validation->set_rules('title', 'title', 'required|min_length[1]|max_length[30]',   array('required' => 'Você deve preencher o titulo ou titulo grande de mais.'));
        $this->form_validation->set_rules('content', 'content', 'required|min_length[1]|max_length[10000]',  array('required' => 'Você deve preencher o texto.'));
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                "titulo" => "criar noticia",
                "error" => validation_errors()
            );
            $this->template->load('template', 'formulario', $data);
        } else {
            $data = array(
                "id_author" =>  $this->session->id, 
                "dt_register" => $this->input->post('dt_register'),
                "dt_change" => date('Y-m-d'),
                "id_category" => $this->input->post('category'),
                "title" => $this->input->post('title'),
                "content" => $this->input->post('content'),
                "slug" => $this->slugify($this->input->post('title'))
            );
            $news = $this->news_model->insert($data);
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name'] = md5(uniqid(rand(), TRUE));
            $config['file_ext'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);
            $this->upload->do_upload('photo');
            $gallery_data = array(
                "id_news" => $news,
                "photo" => $this->upload->data('file_name')
            );
            $this->gallery_model->insert($gallery_data);
            redirect('index.php/home');
        }
    }
    function slugify($string)
    {
        $string = preg_replace('/[\t\n]/', ' ', $string);
        $string = preg_replace('/\s{2,}/', ' ', $string);
        $list = array(
            'Š' => 'S',
            'š' => 's',
            'Đ' => 'Dj',
            'đ' => 'dj',
            'Ž' => 'Z',
            'ž' => 'z',
            'Č' => 'C',
            'č' => 'c',
            'Ć' => 'C',
            'ć' => 'c',
            'À' => 'A',
            'Á' => 'A',
            'Â' => 'A',
            'Ã' => 'A',
            'Ä' => 'A',
            'Å' => 'A',
            'Æ' => 'A',
            'Ç' => 'C',
            'È' => 'E',
            'É' => 'E',
            'Ê' => 'E',
            'Ë' => 'E',
            'Ì' => 'I',
            'Í' => 'I',
            'Î' => 'I',
            'Ï' => 'I',
            'Ñ' => 'N',
            'Ò' => 'O',
            'Ó' => 'O',
            'Ô' => 'O',
            'Õ' => 'O',
            'Ö' => 'O',
            'Ø' => 'O',
            'Ù' => 'U',
            'Ú' => 'U',
            'Û' => 'U',
            'Ü' => 'U',
            'Ý' => 'Y',
            'Þ' => 'B',
            'ß' => 'Ss',
            'à' => 'a',
            'á' => 'a',
            'â' => 'a',
            'ã' => 'a',
            'ä' => 'a',
            'å' => 'a',
            'æ' => 'a',
            'ç' => 'c',
            'è' => 'e',
            'é' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'ì' => 'i',
            'í' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'ð' => 'o',
            'ñ' => 'n',
            'ò' => 'o',
            'ó' => 'o',
            'ô' => 'o',
            'õ' => 'o',
            'ö' => 'o',
            'ø' => 'o',
            'ù' => 'u',
            'ú' => 'u',
            'û' => 'u',
            'ý' => 'y',
            'ý' => 'y',
            'þ' => 'b',
            'ÿ' => 'y',
            'Ŕ' => 'R',
            'ŕ' => 'r',
            '/' => '-',
            ' ' => '-',
            '.' => '-',
            ',' => '-',
            '@' => '-',
            ':' => 'a',
            '(' => 'b',
            ')' => 'c',
        );
        $string = strtr($string, $list);
        $string = preg_replace('/-{2,}/', '-', $string);
        $string = strtolower($string);
        return $string;
    }
}