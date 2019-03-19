<?php
Class Search_Model Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search_title($keyword)
    {
        $this->db->like('title',$keyword);
        $query  =   $this->db->get('books');
        return $query->result();
    }
    function search_author($keyword)
    {
        $this->db->like('author',$keyword);
        $query  =   $this->db->get('books');
        return $query->result();
    }
}