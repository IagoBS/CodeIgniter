<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Redes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('redes_sociais_model');
        $result = $this->redes_sociais_model->get_entries();
        $date_sociais = array(
            "redes" => $result
        );
    }
    public function incone()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = md5(uniqid(rand(), TRUE));
        $this->upload->initialize($config);
        $this->upload->do_upload('photo');
        $gallery_data = array(
            "photo" => $this->upload->data('file_name')
        );
        $this->redes_sociais_model->insert($gallery_data);
    }
}
