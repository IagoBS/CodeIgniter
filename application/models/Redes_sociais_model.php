<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Redes_sociais_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_entries()
    {
        $query = $this->db->get('redes_sociais');
        return $query->result();
    }
    public function insert($data)
    {
        $this->db->insert("redes_sociais", $data);
        return $this->db->insert_id();
    }
}
