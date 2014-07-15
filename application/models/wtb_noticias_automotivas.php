<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }
class Wtb_noticias_automotivas extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function listaNoticias() {
        $this->db->order_by("dt_noticia", "desc");
        $query = $this->db->get("wtb_noticias_automotivas");
        $result = $query->result();
        return $result;
    }
    
    function buscaNoticia($cd_noticia = FALSE) {
        $this->db->where("cd_noticia", $cd_noticia);
        $query = $this->db->get("wtb_noticias_automotivas");
        $result = $query->result();
        return $result;
    }
}

