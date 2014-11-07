<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Denounces extends CI_Controller 
{
    var $data;
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('denounces_model');
    }

    public function index()
    {
        $this->data['category'] = $this->getCategory();
        $this->data['states'] = $this->getStates();
        $this->data['city'] = $this->getCity();
        $this->load->view('denounces', $this->data);
    }
    
    public function getCategory()
    {
        return $this->denounces_model->getCategory();
    }
    
    public function getStates()
    {
        return $this->denounces_model->getStates();
    }
    
    public function getCity()
    {
        return $this->denounces_model->getCity();
    }
}