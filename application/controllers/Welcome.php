<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            
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
            //$this->load->view('admin/banners',$data);
            $this->load->view('index',$data);
	}
}
