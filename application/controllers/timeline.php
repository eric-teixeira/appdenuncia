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
    
    public function addcone()
    {   
        $idDenounce = $_POST['id'];
        $result = $this->db->get_where('denounces', array('id_denounce' => $idDenounce))->result()[0];
        $result->qtdeCones += 1;
        $conexao = mysql_pconnect("localhost","root","senha");
        $banco = mysql_select_db("appdenuncia");
        $insert - mysql_query("UPDATE denounces SET qtdeCones = $result->qtdeCones WHERE id_denounce = $idDenounce");
        mysql_close($conexao);
        
        echo $sql;
    }
}