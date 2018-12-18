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
        $this->load->view('admin/notasList');        
    }
    
    public function editoriales(){
        //validar inicio de sesion
        $this->load->view('admin/editorialesList');        
    }
    
    public function nuevanota(){
        //validar inicio de sesion
        $this->load->view('admin/nuevanota');        
        /*$url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array (
                'to' => array (
                        "/topics/foo-bar"
                ),
                'data' => array (
                        "message" => "Intento nnn"
                )
        );
        $fields = json_encode ( $fields );

        $headers = array (
                'Authorization: key=' . "AIzaSyAbS9ED0SyTkBaBlE_KQUupo5dPYMCtUto",
                'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        echo $result;
        curl_close ( $ch );*/
    }
    
    public function nuevaeditorial(){
        //validar inicio de sesion
        $this->load->view('admin/nuevaedit');        
    }
    
    public function saveidnota(){
        $idnota = $this->input->post("idnota");
        $this->session->set_userdata("idnota",$idnota);
        echo $idnota;
    }

    public function editarnota(){
        //validar inicio de sesion
        $data["idNota"] = $this->session->userdata("idnota");
        //echo $data["idNota"];
        $this->load->view('admin/nuevanota',$data);
    }
       
        
    public function saveideditorial(){
        $idnota = $this->input->post("idnota");
        $this->session->set_userdata("ideditorial",$idnota);
        echo $idnota;
    }

    public function editareditorial(){
        //validar inicio de sesion
        $data["idNota"] = $this->session->userdata("ideditorial");
        //echo $data["idNota"];
        $this->load->view('admin/nuevaedit',$data);
    }
    
    public function adios(){
        //cerrar sesion y destruirla
        redirect('/');
    }
    
//============================edit banners home==============================
    public function mapas(){
        //validar inicio de sesion
        $this->load->view('admin/mapasList');        
    }
    
    public function nuevomapa(){
        //validar inicio de sesion
        $this->load->view('admin/nuevomapa');        
    }
        
    public function saveidmapa(){
        $idnota = $this->input->post("idmapa");
        $this->session->set_userdata("idmapa",$idnota);
        echo $idnota;
    }

    public function editarmapa(){
        //validar inicio de sesion
        $data["idMapa"] = $this->session->userdata("idmapa");
        //echo $data["idNota"];
        $this->load->view('admin/nuevomapa',$data);
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
                //si no es 9999, entonces salvo imagen normal
                $sourcePath = $value["tmp_name"]; // Storing source path of the file in a variable
                $targetPath = $back."/".$value["name"];//.$_FILES['file']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file                    

            }
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
                $targetPath = $back."/"+$value["name"];//banner".$indice.".png";//.$_FILES['file']['name']; // Target path where file is to be stored
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

        unlink($back."/".$idbanner);
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
