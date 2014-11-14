<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mydata extends CI_Controller 
{
    var $data;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('mydata_model');
        $this->load->model('login_model');
        $this->data['data'] = $this->mydata_model->loadData();
        $this->data['username'] = $this->login_model->getUser();
        $this->load->view('mydata', $this->data);
    }
}