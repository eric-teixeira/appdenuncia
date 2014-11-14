<?php

class login_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function login($username, $password){
        $where['username'] = $username;
        $query = $this->db->get_where('login', $where);
        
        if($query->num_rows)
        {
            $this->load->library('encrypt');
            $dados_login = $query->row();
            
            if($this->encrypt->decode($dados_login->password) == $password)
            {
                $this->start_session($dados_login);
                return true;
            }
            
            return false;
        }
        
        return false;
    }
    
    public function start_session($dados_login)
    {
        $dados_session = array(
            'id_login' => $dados_login->id_login, 
            'username' => $dados_login->username, 
        );
        
        $this->session->set_userdata('appenuncia_session', $dados_session);
    }
    
    public function sair()
    {
        $this->session->sess_destroy();
    }
    
    public function getUser()
    {
        $this->load->library('session');
        $session_data = $this->session->userdata('appenuncia_session');
        $this->db->select('username');
        $result = $this->db->get_where('login', array('id_login' => $session_data['id_login']))->result()[0];
        return $result;
    }
}
