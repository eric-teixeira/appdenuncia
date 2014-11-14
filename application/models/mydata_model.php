<?php

class mydata_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function loadData()
    {
        $this->load->library('session');
        $session_data = $this->session->userdata('appenuncia_session');
        $result = $this->db->get_where('register', array('id_user' => $session_data['id_login']))->result();
        return $result;
    }
}