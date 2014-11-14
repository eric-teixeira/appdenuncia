<?php

class denounces_model extends CI_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    public function getStates()
    {
        $query = $this->db->get('estado');
        return $query;
    }
    
    public function getCity()
    {
        $this->db->order_by("nome", "asc"); 
        $query = $this->db->get('cidade');
        return $query;
    }
    
    public function register($dados, $arquivo)
    {   
        $dados['image'] = $arquivo['tmp_name'];
        $this->db->insert('denounces', $dados);
    }
}