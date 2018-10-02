<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cartografias
 *
 * @author john.cristobal
 */
class Cartografias extends CI_Controller
{    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->output
           ->set_content_type('application/pdf')
           ->set_output(file_get_contents(base_url()."/informes/zmcmok.pdf"));
    }
}
