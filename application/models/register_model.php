<?php

class register_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function validateUsername($dados)
    {
        $query = $this->db->get_where('login', array('username' => $dados['username']));
        return($query->num_rows() > 0 ? false : true);
    }
    
    public function validateEmail($dados)
    {
        $query = $this->db->get_where('register', array('email' => $dados['email']));
        return($query->num_rows() > 0 ? false : true);
    }
    
    public function validatePassword($dados)
    {
        return($dados['password'] != $dados['confirmPassword'] ? false : true);
    }
    
    public function registerUser($dados)
    {
        $this->load->library('encrypt');
        
        $dadosRegister = array(
            'name' => $dados['name'],
            'email' => $dados['email']
        );
        $dadosLogin = array(
            'username' => $dados['username'],
            'password' => $this->encrypt->encode($dados['password'])
        );
        
        $this->db->insert('register', $dadosRegister);
        $this->db->insert('login', $dadosLogin);
    }
}
