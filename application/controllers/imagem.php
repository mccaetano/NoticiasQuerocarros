<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imagem extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index ($imagebase64) {
        $imagebase64 = base64_decode(urldecode($imagebase64));
        $filetype = filetype($imagebase64);
        header("Contet-Type: ".$filetype);
        $hd = fopen($imagebase64, FOPEN_READ);
        fpassthru($hd);
        fclose($hd);
        exit(0);
    }
}

