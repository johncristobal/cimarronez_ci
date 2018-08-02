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
        //$this->load->view('videoprueba');        
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
    
    public function mapa(){
        $this->load->view('mapa');
    }
    
    public function mapaMarkers(){

        //33000 ane
        //$handle = $this->utf8_fopen_read("Pueblosrebelionesmac.csv");
        //stream_filter_register("EOL", "EOLStreamFilter");

        $handle = fopen("Pueblosrebelionesmachere.csv", "r");
        if ($handle) {
            $mapamark = 0;
            $arreglo = array();
            
            $indice = 0;
            $indicecoordenadas = 5;
            $indicelugar = 4;
            //$line = fgets($handle);
            //$string=str_replace("\r","\n",$line);
            while (($line = fgetcsv($handle,1000,';')) !== false) {
                // process the line read.

                //echo "Fin...<br><br>";
                
                do{
                    //checamos si hay coordenada
                    if ($line[$indicecoordenadas] == "" && $line[$indicelugar] == ""){
                        $indice += 8;
                        $indicecoordenadas += 8;
                        $indicelugar+= 8;
                    }else{
                        //tenemos coordenada y pueblo, buscamos en url para obtener lat y long 
                        $coordenada = $line[$indicecoordenadas];
                        $lugar = $line[$indicelugar];
                        $masdeunacoordenada = explode(" ", $coordenada);
                        $masdeunlugar= explode(" ", $lugar);
                        $coordenadaurl = $masdeunacoordenada[0];                         
                        $lugarurl = $masdeunlugar[0];                         
                        //con el lugar y la coordenada llamamos url
                        $resultados = $this->callApi($coordenadaurl,$lugarurl);
                        if(count($resultados) < 2){
                            //aumentamos para el siguiente fila
                            //si hay menos de dos resultados, entonces no se encontro el lugar
                            $indice += 8;
                            $indicecoordenadas += 8;
                            $indicelugar+= 8;                        
                        }else{
                            $cero = $resultados["results"];
                            if(count($cero) == 2){
                                //echo "Lat: ".$cero[0]["geometry"]["location"]["lat"]."<br>";
                                //echo "Long: ".$cero[0]["geometry"]["location"]["lng"]."<br>";
                                $arreglotemp = array(
                                    "lat" => $cero[0]["geometry"]["location"]["lat"],
                                    "lng" => $cero[0]["geometry"]["location"]["lng"],
                                    "suceso" => $line[$indicelugar-1]
                                );

                                array_push($arreglo,$arreglotemp);

                                $indice += 8;
                                $indicecoordenadas += 8;
                                $indicelugar+= 8;              
                            }
                        }
                    }
                }while($indicecoordenadas <= count($line));             
            }
            fclose($handle);
        } else {
            // error opening the file.
        }

        //$data['arreglo'] = $arreglo;
        //$this->load->view('mapa/mapa',$data);
        $xml = '<markers>';
        foreach($arreglo as $row=>$value){
          $xml .= '<marker lat="'.$value['lat'].'" lng="'.$value['lng'].'" name="'.$value['suceso'].'"/>';
        }
        $xml .= '</markers>';
        //$this->output->set_content_type('text/xml');
        //$this->output->set_output($xml);
        file_put_contents("myxmlfile.xml", $xml);
        echo "fin";
        
        //$this->load->view('mapa/mapa');
    }
    
    public function taller($tipo){
        switch ($tipo){
            case "salud":
                $this->load->view('talleruno');
                break;
            case "ambiente":
                $this->load->view('tallerdos');
                break;
            case "territorio":
                $this->load->view('tallertres');
                break;
            case "solidaridad":
                $this->load->view('tallercuatro');
                break;
            }
    }
    
    function callApi($coordenad,$pueblo){
                
        $myfile = fopen("testfile.txt", "w");

        if(strlen($coordenad) == 4){
            $coordenad = "0".$coordenad;
        }
        
        //$myurl = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$coordenad.'+'.$pueblo.',México&key=AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM';
        
        /*$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $myurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($ch),true);
        curl_close($ch);

        sleep (1);
        return $data;*/
        
        header('Content-type: application/json');
        //$myURL = "https://maps.googleapis.com/maps/api/geocode/json?address=".$coordenad."+".$pueblo.",México&";   
        //$options = array("key"=>"AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM");
        //$myURL .= http_build_query($options,'','&');
        //$myData = file_get_contents($myURL); // or die(print_r(error_get_last()));
        $myURL = "https://maps.googleapis.com/maps/api/geocode/json?address=".$coordenad."+".$pueblo.",México&key=AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM";
        fwrite($myfile, $myURL);
        fclose($myfile);
        $Data = json_decode(file_get_contents($myURL),true);        
        sleep (1);
        return $Data;
    }
    
    function apigooglemaps(){
        header('Content-type: application/json');
        $myURL = "https://maps.googleapis.com/maps/api/geocode/json?address=21140+cholula%20,México&key=AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM";
        $Data = json_decode(file_get_contents($myURL),true);        
        sleep (1);
        echo $Data;

    }
    
    function utf8_fopen_read($fileName) { 
        $fc = iconv('windows-1250', 'utf-8', utf8_encode($fileName)); 
        $handle=fopen("php://memory", "rw"); 
        fwrite($handle, $fc); 
        fseek($handle, 0); 
        return $handle; 
    } 
}
