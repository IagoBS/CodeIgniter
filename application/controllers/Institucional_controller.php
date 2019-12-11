<?php

class Institucional_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('');
    }
    public function index() {
        $dados['titulo'] = "conteudo";
        $dados['conteudo'] = "LoremLoremLoremLoremLorem ";
        $this->load->view('exemplo1', $dados);
    }
    public function message()
    {
      
    }
}
