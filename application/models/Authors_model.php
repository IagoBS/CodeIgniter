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
    public function insert($data)
    {
        $this->db->insert("authors", $data);
        return $this->db->insert_id();
    }
    public function get_entry($email)
    {
        $this->db->select("id, email, pass, name");
        $this->db->from("authors");
        $this->db->where("email", $email);
        $query = $this->db->get();
        return $query->result();
    }
}
