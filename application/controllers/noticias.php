<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }
class Noticias extends CI_Controller {
    function __construct() {
        parent::__construct();
        
    }
    
    function index() {
        $this->load->model("Wtb_noticias_automotivas");
        $noticias =  $this->Wtb_noticias_automotivas->listaNoticias();        
        $this->load->helpers(array('form', 'url'));
        $data = array();
        $data['noticias'] = $noticias;
        $this->load->view('include/header', $data);
        $this->load->view('include/menu', $data);
        $this->load->view('include/header1', $data);
        $this->load->view('noticias', $data);
        $this->load->view('include/footer', $data);
    }
    
    
    function detalhe($cd_noticia = FALSE) {
        
        $this->load->model("Wtb_noticias_automotivas");
        $noticia = $this->Wtb_noticias_automotivas->buscaNoticia($cd_noticia);
        $this->load->helpers(array('form', 'url'));
        $data = array();
        $data['noticia'] = $noticia[0];
        $this->load->view('include/header', $data);
        $this->load->view('include/menu', $data);
        $this->load->view('include/header1', $data);
        $this->load->view('noticias_detalhe', $data);
        $this->load->view('include/footer', $data);
    }
}
