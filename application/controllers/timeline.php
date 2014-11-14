<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timeline extends CI_Controller 
{
    var $data;
    
    public function __construct() {
        parent::__construct();
        
        if(!$this->session->userdata('appenuncia_session'))
            redirect('login');
    }
    
    public function index()
    {
        $this->load->model('timeline_model');
        $this->data['denounces'] = $this->timeline_model->getDenounces();
        $this->load->view('timeline', $this->data);
    }
}