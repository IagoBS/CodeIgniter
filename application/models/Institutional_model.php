<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Institutional_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_entries() {
        $query = $this->db->get('institutional');
        return $query->result()[0];
    }
}