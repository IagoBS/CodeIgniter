<?php
class Authors extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $this->load->model('authors_model');
        $result = $this->categories_model->get_entries();
        $data = array(
            "authors" => $result
        );
        }
}