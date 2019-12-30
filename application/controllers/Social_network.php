<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Social_network extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('redes_sociais_model');
        $this->load->model('gallery_model');
    }
    public function index()
    {
        
        $this->load->helper('form');
        $redes = $this->load->model('redes_sociais_model');
        $data = array(
            "titulo" => "criar noticia",
            "redes" => $redes
        );

        $this->template->load('template', 'social_network', $data);
    }
    public function create()
    {
        $this->load->helper(['url']);
        $this->load->model('redes_sociais_model');
        $this->load->library('upload');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required|min_length[1]|max_length[20]',   array('required' => 'Você deve preencher o nome .'));
        $this->form_validation->set_rules('link', 'link', 'required|min_length[1]|max_length[1000]', array('required' => 'Erro ao preencher link'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                "titulo" => "Social network",
                "error" => validation_errors()
            );
            $this->template->load('template', 'social_network', $data);
        } else {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['file_name'] = md5(uniqid(rand(), TRUE));
            
            $this->upload->initialize($config);
            $this->upload->do_upload('incone');
           
            $data = array(
                "links" => $this->input->post('link'),
                "name" => $this->input->post('name'),
                "incone" => $this->upload->data('file_name')
            );
            $this->redes_sociais_model->insert($data);
            redirect('index.php/home');
        }
    }
}
