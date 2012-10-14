<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*--------------------------------------------------
 | Google Maps Markers Class
 | By Marc Arbour
 | Copyright (c) 2010 
 | Email: marbour@ci2.ca
 | License: http://ci2.ca/google_maps_markers/Google_maps_markers_license.html
 +--------------------------------------------------
 | Email bugs/suggestions to marbour@ci2.ca
 +--------------------------------------------------
 | Be informed of script releases at 
 | http://linfolettre.com/lists/?p=subscribe&id=9
 +--------------------------------------------------
 | Read the help page here:
 | http://ci2.ca/google_maps_markers/google_maps_markers.html
 +--------------------------------------------------
 | This script has been created and released under
 | the GNU GPL and is free to use and redistribute
 | only if this copyright statement is not removed
 +--------------------------------------------------*/
require_once(APPPATH.'libraries/front_controller.php');
class Google_maps extends Front_Controller {

	
    function index()
	{
	   	$langCurent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('contact', $langCurent);
		$this->load->library('google_maps_markers'); // load the class
        $this->google_maps_markers->initialize();   // initialize the class
        
        $markers = array (                      // provide some markers with appropriate information
            "1"  => array ( "image" => "image1",
                            "title" => "Montr�al",
                            "lat" =>  45.503154706,
                            "lng" => -73.570461273,
                            "contentString" => "<h1>Montr�al</h1>The town I was borned in" ),
            "2"  => array ( "image" => "image2",
                            "title" => "Longueuil",
                            "lat" =>  45.52023646,
                            "lng" => -73.4884071,
                            "contentString" => "<h1>Longueuil</h1>The town I spent most of my childhood" ),
            "3"  => array ( "image" => "image3",
                            "title" => "L�vis",
                            "lat" =>  46.8204396,
                            "lng" => -71.160678,
                            "contentString" => "<h1>L�vis</h1>The town where I got tired of towns" ),
            "4"  => array ( "image" => "image4",
                            "title" => "Deschaillons-sur-Saint-Laurent",
                            "lat" =>  46.55728843,
                            "lng" => -72.1136784,
                            "contentString" => "<h1>Deschaillons-sur-Saint-Laurent</h1>The town I decided to escape other towns in" ),
            "5"  => array ( "image" => "image5",
                            "title" => "Home",
                            "lat" =>  46.55413079,
                            "lng" => -72.12170362,
                            "contentString" => "<h1>Home</h1>Where Google Maps Markers Class was written" ),
            "6"  => array ( "image" => "image6",
                            "title" => "Trois-Rivi�res",
                            "lat" =>  46.3504665,
                            "lng" => -72.5832366,
                            "contentString" => "<h1>Trois-Rivi�res</h1>The town I need to go to if I want to see store chains" ),
        );
        
	   $data['google_maps_markers'] = '<div align="center"><h1>Google Maps </h1>
            <br>
            '.$this->google_maps_markers->create_map($markers).'</div>';
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('layout_content','google_map.tpl',true);
		//Load language key
		$templateLayout = $this->mtemplate->_template;
	    $arrData = $this->load->view("templates/$templateLayout/container_google_maps_markers",$data, true);
	    $view->assign('ARR_DATA',$arrData,true);
	    $view->assign('PAGE_TITLE',$this->lang->line('PAGE_TITLE'),true);
	    $view->assign('MENU_LEFT',1,true);
	    $view->display('index.tpl');
    }
    
}

/* End of file google_maps_markers_example.php */
/* Location: ./system/application/controllers/google_maps_markers_example.php */