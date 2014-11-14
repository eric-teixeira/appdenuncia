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
        $this->mydata_model->loadData();
        $this->load->view('mydata', $this->data);
    }
}