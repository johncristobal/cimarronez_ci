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
        
        $this->load->model('Producto_model');        
    }

    //show a list of elements
    public function index(){
                
        $data['categorias'] = $this->Producto_model->getCategorias();
        $this->load->view('productos/categorias',$data);
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
    
    public function categorias($id){
        //get products with this idcategoria
        $data['productos'] = $this->Producto_model->getCategoriasById($id);
        $data['desc'] = $this->Producto_model->getNombreById($id)->descripcion;
        $this->load->view('productos/productosByCategory',$data);

    }    
}

