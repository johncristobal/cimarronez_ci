<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contacto
 *
 * @author john.cristobal
 */
class admin extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));

    }
    
    public function index(){
        $this->load->view('admin/login');
    }
    
    public function inicio(){
        //validar inicio de sesion
        $this->load->view('admin/inicio');        
    }
    public function nuevanota(){
        //validar inicio de sesion
        $this->load->view('admin/nuevanota');        
    }
    
    public function updatenota($id){
        //validar inicio de sesion
        echo $id;       
    }
    
    public function adios(){
        //cerrar sesion y destruirla
        redirect('/');
    }
    
    
}
