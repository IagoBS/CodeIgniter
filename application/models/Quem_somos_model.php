<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Quem_somos_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_entries() {
        $query = $this->db->get('quem_somos');
        return $query->result()[0];
    }
}