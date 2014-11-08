<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller 
{
    var $data;
    
    public function index()
    {
        $this->load->view('register', $this->data);
    }
    
    public function singup()
    {
        $this->validateFields($this->input->post());
    }
    
    public function validateFields($dados)
    {
        $this->load->model('register_model');
        
        if($this->register_model->validateEmail($dados))
        {
            if($this->register_model->validateUsername($dados))
            {
                if($this->register_model->validatePassword($dados))
                {
                    $this->register_model->registerUser($dados);
                    $this->data['success'] = "Cadastrado com sucesso.";
                    $this->index();
                }
                else
                {
                    $this->data['erro'] = "Senhas não conferem.";
                    $this->index();
                }
            }
            else
            {
                $this->data['erro'] = "Username já existe.";
                $this->index();
            }
        }
        else
        {
            $this->data['erro'] = "E-mail já cadastrado. Existe uma conta com este e-mail.";
            $this->index();
        }
    }
}