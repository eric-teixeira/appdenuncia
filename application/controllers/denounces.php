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
        $this->data['states'] = $this->getStates();
        $this->data['city'] = $this->getCity();
        $this->load->view('denounces', $this->data);
    }
    
    public function getStates()
    {
        return $this->denounces_model->getStates();
    }
    
    public function getCity()
    {
        return $this->denounces_model->getCity();
    }
    
    public function register()
    {
        $existError = false;
        //Gravando Imagem
        if($_FILES){
            //1o - Parametros de teste
            $tam_maximo = (1000 * 1024); //Definido em bytes - 1kB = 1024 bytes
            $tp_allowed = array("image/gif", "image/jpeg", "image/x-png", "image/bmp");

            //2o - Validando arquivo enviado
            $arquivo = $_FILES['imgDenounce'];

            //Validando de não existe erros
            if($arquivo['error'] != 0){
                switch($arquivo['error']){
                    case UPLOAD_ERR_INI_SIZE:
                        $existError = true;
                        $this->data['error'] =  "O arquivo excede o tamanho máximo permitido";
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $existError = true;
                        $this->data['error'] =  "O arquivo enviado é muito grande";
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        $existError = true;
                        $this->data['error'] =  "O upload não foi completo";
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        $existError = true;
                        $this->data['error'] =  "Nenhum arquivo informado para upload";
                        break;
                    exit();
                }
            }

            if($arquivo['size'] == 0 || $arquivo['tmp_name'] == NULL){
                $this->data['error'] =  "Nenhum arquivo enviado";
                $existError = true;
            }

            if($arquivo['size'] > $tam_maximo){
                $this->data['error'] =  "O arquivo excede o tamanho máximo de $tam_maximo";
                $existError = true;
            }

            //Avaliando se o tipo do arquivo é permitido
            if(array_search($arquivo['type'], $tp_allowed) === FALSE){
                $this->data['error'] =  "O tipo do arquivo não é permitido.";
            }

            //Movendo o arquivo enviado
            $destino = 'C:\xampp\htdocs\appdenuncia\assets\uploads\\';
            $destino .= $arquivo['name'];

            if(file_exists($destino)){
                $destino = 'C:\xampp\htdocs\appdenuncia\assets\uploads\\';
                $destino .= rand(0,10000). "_";
                $destino .= $arquivo['name'];
            }

            if(!move_uploaded_file($arquivo['tmp_name'], $destino))
                $this->data['error'] =  "Ocorreu um erro no upload do arquivo";
        }
        
        $this->load->model('denounces_model');
        
        if($this->denounces_model->register($this->input->post(), $arquivo['name']))
            $this->data['error'] = "Ocorreu um erro ao salvar!";
        else
            $this->data['success'] = "Cadastrada com sucesso!";
        
        $this->index();
    }
}