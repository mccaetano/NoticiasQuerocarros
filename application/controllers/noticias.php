<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Noticias extends CI_Controller {
    function __construct() {
        parent::__construct();
        
    }
    
    function index() {
        $this->load->helper(array('form', 'url'));
        $data = array();
        $this->load->view('include/header', $data);
        $this->load->view('noticias', $data);
        $this->load->view('include/footer', $data);
    }
}
