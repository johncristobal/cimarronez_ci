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
    
    //============================edit banners home==============================
    public function reorderindexbanner(){
        $key = "banner";
        //$back = $this->AdminModel->getParametro($key);
        $back = "images/banners";
        //files
        $this->load->helper('directory');
        $map = directory_map($back);
        asort($map);        
        /*foreach($map as $file){
            if(is_string($file)){
                echo $file;
            }
        }*/
        $data["banners"] = $map;
        $data["urlfolder"] = $back;
        $this->load->view('admin/bannerslist',$data);
    }
//============================edit banners home==============================
    public function nuevobanner(){
        $this->load->view('admin/bannernuevo');
    }
//============================edit banners home==============================
    public function cambiarbanners(){
        /*de la tabla parametria pbtengo la caprte de banners
        * obtengo los archivos de esa carpeta
        *mostrar una vista con esos banners donde podamos cambiarlos (como edit perfil)
        *logica similar a subir archivo que ya tenemos...
        *colocar que no deben ser mayor a 8 mb
        *enviar y listo banners cambiados...
        *OJO => opcion para subir nuevo banner
        *ojo con los nombres          
         */
        //parametro
        $key = "banner";
        //$back = $this->AdminModel->getParametro($key);
        $back = "images/banners";
        
        //files
        $this->load->helper('directory');
        $map = directory_map($back);
        asort($map);        
        /*foreach($map as $file){
            if(is_string($file)){
                echo $file;
            }
        }*/
        $data["banners"] = $map;
        $data["urlfolder"] = $back;
        //vista con banners
        $this->load->view('admin/banners',$data);
    }
//============================update banners home==============================    
    public function updateBanners(){        
        //validamos los file que tiene - foreach
        //si tiene nombre, entonces actualizo
        //else - conservo el mismo banner
        //ojo con el idnince, se mantiene el 1,2,3,4...
        
        $sourcePath = $_FILES;
        $key = "banner";
        $indice = 0;
        //$back = $this->AdminModel->getParametro($key);
        $back = "images/banners";

        foreach ($sourcePath as $key => $value) {
            if($value["name"] != "")
            {                
                if ($key == "foto9999"){
                    $this->load->helper('directory');
                    $map = directory_map($back);
                    $cantidad = count($map);
                    $sourcePath = $value["tmp_name"]; // Storing source path of the file in a variable
                    $targetPath = $back."/banner".($cantidad+1).".png";//.$_FILES['file']['name']; // Target path where file is to be stored
                    move_uploaded_file($sourcePath,$targetPath); // Moving Uploaded file       
                    
                }else{
                    //si no es 9999, entonces salvo imagen normal
                    $sourcePath = $value["tmp_name"]; // Storing source path of the file in a variable
                    $targetPath = $back."/banner".$indice.".png";//.$_FILES['file']['name']; // Target path where file is to be stored
                    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file                    
                }
            }
            $indice++;
        }
        
        //redirect('/admin/cambiarbanners');
        header('Location: '. base_url()."admin/cambiarbanners", true, 302);
        exit;
    }
//============================upload new banners home=========================   
    public function uploadNewBanners(){        
        //validamos los file que tiene - foreach
        //si tiene nombre, entonces actualizo
        //else - conservo el mismo banner
        //ojo con el idnince, se mantiene el 1,2,3,4...
        
        $sourcePath = $_FILES;
        $key = "banner";
        $indice = 1;
        //$back = $this->AdminModel->getParametro($key);
        $back = "images/banners";

        foreach ($sourcePath as $value) {
            if($value["name"] != "")
            {                
                $sourcePath = $value["tmp_name"]; // Storing source path of the file in a variable
                $targetPath = $back."/banner".$indice.".png";//.$_FILES['file']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
            }
            $indice++;
        }
        
        //redirect('/admin/cambiarbanners');
        header('Location: '. base_url()."admin/cambiarbanners", true, 302);
        exit;
    }
//============================delete banners home==============================    
    public function deletebanner($idbanner){
        $key = "banner";
        //$back = $this->AdminModel->getParametro($key);
        $back = "images/banners";
        $this->load->helper('directory');
        $map = directory_map($back);

        asort($map);        
        $flageraesd = 0;
        foreach($map as $file){
            
            if($flageraesd == 1){
                //aqui tenemos que renombraar al resto de los archivos
                //exacto => obtenermos su numero y le restamos 1
                $indicetemp = substr($file, 6, 1);
                $newfile = "banner".($indicetemp-1).".png";
                
                rename($back."/".$file, $back."/".$newfile);
                
                continue;
            }
            
            if (strpos($file, $idbanner) !== false) {
                //"encontramos el archivo que hay que eliminar";
                //lo eliminamos y los archivos restantes tenemos que renombrarlos
                unlink($back."/".$file);
                $flageraesd = 1;
            }
        }
        header('Location: '. base_url()."admin/cambiarbanners", true, 302);
        exit;
        //echo $idbanner;
    }
//============================reorder banners home==============================    
    public function reorderbanner(){
        
        $datos = $this->input->post();
        $indice = 1;
        $key = "banner";
        //$back = $this->AdminModel->getParametro($key);
        $back = "images/banners";

        //crea banners2
        mkdir($back."2", 0777);
        
        foreach ($datos as $key => $value) {
            $newfile = "banner".($indice).".png";
            rename($back."/".$value, $back."2/".$newfile);            
            $indice++;
        }
        
        //borramos banners
        unlink($back);
                
        //banenrs 2 ahora es banners
        rename($back."2", $back);   
        
        //redirect('/admin/cambiarbanners');
        header('Location: '. base_url()."admin/cambiarbanners", true, 302);
        exit;
    }
}
