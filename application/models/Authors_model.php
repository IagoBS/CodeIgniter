<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Authors_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_entries() {
        $query = $this->db->get('authors');
        return $query->result();
    }
}