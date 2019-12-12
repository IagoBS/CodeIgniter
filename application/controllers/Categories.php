<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Categories extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('categories_model');
        $result = $this->categories_model->get_entries();
        $categories = array(
            "result" => $result
        );
        }
}