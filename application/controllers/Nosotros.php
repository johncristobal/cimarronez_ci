<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nosotros
 *
 * @author john.cristobal
 */
class nosotros extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('nosotros');
    }
    
    public function rumbos(){
        $this->load->view('rumbos');        
    }
    public function videos(){
        $this->load->view('videos');        
    }
    
    public function salud(){
        $this->load->view('salud');
    }
    
    public function originario(){
        $this->load->view('originario');        
    }
    
    public function letrascacao(){
        $this->load->view('letrascacao');                
    }
}
