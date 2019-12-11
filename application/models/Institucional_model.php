<?php
 class Institucional_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    } 
    function connection() {
         $query = $this->db->query('select *from institucional');
         if ($query->rowCount() > 0) {
           
        }
     }
 }