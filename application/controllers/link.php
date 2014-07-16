<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed'); }

class Link extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helpers(array('url'));
    }
        
    function redirect ($url64 = FALSE) {               
        $url64 = base64_decode(urldecode($url64));
        redirect( $url64, "refresh" );
    }
}