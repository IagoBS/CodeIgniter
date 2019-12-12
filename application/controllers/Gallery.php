<?php
class Gallery extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
   function index() {
    $this->load->model('gallery_model');
    $gallery = $this->categories_model->get_entries();
    $gallery = array(
        "result" => $gallery
    );
   }
}
