<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model {
    function __construct()
    {
     parent::__construct();
    }
    public function get_entries() {
        $this->db->select("news.id, news.title, news.content, news.deleted_at,
        news.dt_register, news.dt_change, categories.name as 'category',
        authors.name as 'author',  gallery.photo as 'photo'");
        $this->db->from('news');
        $this->db->join('authors', 'authors.id = news.id_author');
        $this->db->join('categories', 'categories.id = news.id_category ');
        $this->db->join('gallery', 'gallery.id_news = news.id');
        $query = $this->db->get();
        return $query->result();
    }
    public function insert($data) {
         $this->db->insert("news", $data);
         return $this->db->insert_id();
        
    }
    public function get_news($id) {
        $this->db->select("news.id, news.title, news.content, news.deleted_at,
        news.dt_register, news.dt_change, categories.name as 'category',
        authors.name as 'author', gallery.photo as 'photo' ");
        $this->db->from('news');
        $this->db->join('authors', 'authors.id = news.id_author');
        $this->db->join('categories', 'categories.id = news.id_category ');
        $this->db->join('gallery', 'gallery.id_news = news.id');
        $this->db->where('news.id', $id);
        $query = $this->db->get();
        return $query->result()[0];
    }
}