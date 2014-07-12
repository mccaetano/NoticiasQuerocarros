<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Imagem extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helpers(array('url'));
    }
        
    function load ($imagebase64 = FALSE) {
               
        $imagebase64 = base64_decode(urldecode($imagebase64));
        $headers = get_headers($imagebase64, 1);
        $filename = basename($imagebase64);
        #header("Content-Disposition: attachment; filename=".$filename);
        header("Content-Type: ".$headers['Content-Type']);
        $hd = fopen($imagebase64, FOPEN_READ);
        fpassthru($hd);
        fclose($hd);
        
        exit(0);
    }
}

