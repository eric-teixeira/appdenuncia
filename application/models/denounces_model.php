<?php

class denounces_model extends CI_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    public function getCategory()
    {
        $query = $this->db->get('category');
        return $query;
    }
    
    public function getStates()
    {
        $query = $this->db->get('states');
        return $query;
    }
    
    public function getCity()
    {
        $this->db->order_by("name", "asc"); 
        $query = $this->db->get('city');
        return $query;
    }
}