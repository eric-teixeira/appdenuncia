<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
    var $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }
    
    public function index()
    {
        $this->load->view('login', $this->data);
    }
    
    public function logar()
    {
        if($_POST)
        {
            
            if($this->login_model->login($this->input->post('username'), $this->input->post('password')))
            {
                redirect('timeline');
            }            
            else{
                $this->data['erro'] = "Usuário ou Senha inválido.";
            }
        
            $this->index();
        }
    }
    
    public function sair()
    {
        $this->login_model->sair();
        redirect('login');
    }
}