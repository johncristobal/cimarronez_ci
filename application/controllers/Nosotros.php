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
                //echo $line[230];
                /*for ($c=0; $c < count($line); $c++) {
                    echo $line[$c] . "<br />\n";
                    //si no hay año, continuo
                    if ($line[$c] == ""){
                        $c += 7;
                        continue;
                    }else{
                        //hay año, veamos si hay un dia en especifico en la siguiente celda
                        
                    }
                }*/
                echo "Fin...<br><br>";
                
                do{
                    //checamos si hay coordenada
                    if ($line[$indicecoordenadas] == "" && $line[$indicelugar] == ""){
                        $indice += 8;
                        $indicecoordenadas += 8;
                        $indicelugar+= 8;
                        continue;
                    }else{
                        //tenemos coordenada y pueblo, buscamos en url para obtener lat y long 
                        $coordenada = $line[$indicecoordenadas];
                        $lugar = $line[$indicelugar];
                        $masdeunacoordenada = explode(" ", $coordenada);
                        $coordenadaurl = $masdeunacoordenada[0];                         
                        //con el lugar y la coordenada llamamos url
                        $resultados = $this->callApi($coordenadaurl,$lugar);
                        if(count($resultados) < 2){
                            //aumentamos para el siguiente fila
                            //si hay menos de dos resultados, entonces no se encontro el lugar
                            $indice += 8;
                            $indicecoordenadas += 8;
                            $indicelugar+= 8;                        
                            continue;
                        }else{
                            $cero = $resultados["results"];
                            echo "Lat: ".$cero[0]["geometry"]["location"]["lat"]."<br>";
                            echo "Long: ".$cero[0]["geometry"]["location"]["lng"]."<br>";
                            $arreglotemp = array(
                                "lat" => $cero[0]["geometry"]["location"]["lat"],
                                "lng" => $cero[0]["geometry"]["location"]["lng"],
                                "suceso" => $line[$indicelugar-1]
                            );
                            
                            array_push($arreglo,$arreglotemp);
                            
                            $indice += 8;
                            $indicecoordenadas += 8;
                            $indicelugar+= 8;                        
                            continue;
                        }

                        
                    }
                }while($indice <= count($line));             
            }
            fclose($handle);
        } else {
            // error opening the file.
        }

        //header('Content-type: application/json');
        //$Data = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=13048+Pachuca%20de%20Soto,M%C3%A9xico&key=AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM'),true);
        //echo $DataM;

        $data['arreglo'] = $arreglo;
        $this->load->view('mapa/mapa',$data);
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
        }
    }
    
    function callApi($coordenad,$pueblo){
        header('Content-type: application/json');
        $Data = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$coordenad.'+'.$pueblo.',México&key=AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM'),true);        
        sleep (1);
        return $Data;
    }
    
    function utf8_fopen_read($fileName) { 
        $fc = iconv('windows-1250', 'utf-8', utf8_encode($fileName)); 
        $handle=fopen("php://memory", "rw"); 
        fwrite($handle, $fc); 
        fseek($handle, 0); 
        return $handle; 
    } 
}
