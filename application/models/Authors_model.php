<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Authors_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_entries()
    {
        $query = $this->db->get('authors');
        return $query->result();
    }
    public function insert_author($data)
    {
        $query = $this->db->get('authors', $data);
        return $query->result();
    }
    public function get_author($email)
    {
        
        $query = $this->db->get('authors');
        return $query->result();
    }
   
}
