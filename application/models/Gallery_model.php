<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Gallery_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function get_entries() {
        $query = $this->db->get('gallery');
        return $query->result();
    }
}