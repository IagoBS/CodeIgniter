<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->logged_in) {
            redirect('home');
        } 
    }
}