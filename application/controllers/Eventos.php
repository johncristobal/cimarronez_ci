<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eventos
 *
 * @author john.cristobal
 */
class eventos extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('eventos/eventos');
    }
    
    public function ver($id){
        if($id==1)
        {
        $this->load->view('eventos/showe');        
        }else if($id==2){
        $this->load->view('eventos/showe2');            
        }else{
        $this->load->view('eventos/brigadas');                        
        }
    }
}
