<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Details_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    public function get_entries() {
        
        $this->db->select("news.id, news.title, news.content, news.deleted_at,
        news.dt_register, news.dt_change, categories.name as 'category',
        authors.name as 'author' ");
        $this->db->from('news');
        $this->db->join('authors', 'authors.id = news.id_author');
        $this->db->join('categories', 'categories.id = news.id_category ');
        $query = $this->db->get();
        return $query->result();
    }
}