<?php

class timeline_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getDenounces()
    {
        $this->db->select('id_denounce, image, description, qtdeCones');
        $result = $this->db->get('denounces')->result();
        return $result;
    }
}