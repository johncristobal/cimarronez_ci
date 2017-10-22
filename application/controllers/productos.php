<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productos
 *
 * @author john.cristobal
 */
class productos extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    //show a list of elements
    public function index(){
        
    }
    
    public function mezcal(){
        $this->load->view('productos/mezcal');
    }
    public function avellana(){
        $this->load->view('productos/avellana');
    }
    public function cacahuate(){
        $this->load->view('productos/cacahuate');
    }
    public function almendra(){
        $this->load->view('productos/almendra');
    }
    public function nuez(){
        $this->load->view('productos/nuez');
    }
    
}
