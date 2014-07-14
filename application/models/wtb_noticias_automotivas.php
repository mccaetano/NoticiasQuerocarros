<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }
class Wtb_noticias_automotivas extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function listaNoticias() {
        $query = $this->db->get(wtb_noticias_automotivas);
        $result = $query->result();
        return $result;
    }
    
    function buscaNoticia($cd_noticia = FALSE) {
        $query = $this->db->where("cd_noticia", $cd_noticia)->get("wtb_noticias_automotivas");
        $result = $query->result();
        return $result;
    }
}

