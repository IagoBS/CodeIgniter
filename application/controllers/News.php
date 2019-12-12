<?php
defined('BASEPATH') or exit('No direct script access allowed');
class News extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    function index() {
       $this->load->model('news_model');
        $result = $this->news_model->get_entries();
        $data = array(
            "news" => $result
        );
        $this->load->view('news', $data);
    }
}