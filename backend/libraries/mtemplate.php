<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MTemplate extends CI_Controller 
{
	public $_template="admin";
	public $cssPath=''; 
	public $jsPath='';
	public $imagePath='';
	public $baseAdminPath='';
	public $basePath='';
	public $baseUrl='';
	public $lang_uri_abbr= "";
	public $lang_abbr = '';
	public $language = '';
	public $lang = '';
	public $middle = '';
	public $index_page = '';
	public $activeLink = '';
	public $current_language = false; 
	public function __construct ($arrConfig)
    {
    	parent::__construct();
//    	//check language key
		global $URI, $CFG;
		$config =& $CFG->config;
		$arrLang = & $CFG->item ( 'lang_uri_abbr' );
        $index_page    = $config['index_page'];
        $this->index_page = $index_page;
        $defaultAbbr  = $config['language_abbr'];
        $defaultLang = $config['language'];
        $this->current_language =$config['current_language'];
        if(isset($arrConfig['language']) && $arrConfig['language']!='')
        {
        	$langAbbr = $arrConfig['language'] ;
        	$language = $arrConfig['lang'] ;
        }
        else
        {
        	$langAbbr = $defaultAbbr;
        	$language = $defaultLang;
        }
        $this->lang_uri_abbr = $langAbbr;
        $this->language = $language;
        $array_path=array();
        //check to language search
       	$langSearch = $this->input->post('language_search');
       	if(isset($langSearch)){
       		$return = 0;
       		foreach($arrLang as $key=>$value){
       			
       			if($value == $langSearch){
       				$langAbbr = $key;
       				$return = 1;
       			}
       			if($return==1)
       				break;
       		}
       	}
       	if($langAbbr != $defaultAbbr )
    	{
    		if(!empty($index_page))
    		{
    			$this->baseUrl = $this->config->item('base_url') . "backend" . '/' . $index_page . '/' . $langAbbr . '/';
    			
    		}
    		else 
    		{
    			$this->baseUrl = $this->config->item('base_url') . "backend" . '/' . $langAbbr . '/';
    		}
    	}
    	else {
    		if(!empty($index_page)) {
    			$this->baseUrl = $this->config->item('base_url') . 'backend' . '/' . $index_page .'/';
    		}
    		else { 
    			$this->baseUrl = $this->config->item('base_url') .'backend' . '/'  ;
    		}
    			
    	}
    	$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2){
			if($lang!= $langAbbr){
			}
				
			$this->middle = $lang . '/'; 
			$this->activeLink = $this->uri->segment(2);  
		}
		else{ 
			$this->middle = ""; 
			$this->activeLink = $this->uri->segment(1);
		}    	
//		die($this->baseUrl);
		$this->basePath = $this->config->item('base_url');
		$this->cssPath=$this->config->item('themes_css');
		$this->jsPath=$this->config->item('themes_js');
		$this->imagePath=$this->config->item('themes_image');
		$this->imageUpload=$this->config->item('image_upload_link');
		return true;
    }

	//get data for template
    public function getData(){
		$this->lang->load('menu_top', $this->language);
		$this->lang->load('language', $this->language);
		$this->load->model('MMenu');
		//load block
		$arrConfig = array();
		$arrConfig['basePath'] = $this->basePath;
		$arrConfig['base_url'] = $this->baseUrl;
		$arrConfig['cssPath'] = $this->cssPath;
		$arrConfig['jsPath'] = $this->jsPath;
		$arrConfig['imagePath'] = $this->imagePath;
		$arrConfig['language'] = $this->language;
		$arrConfig['template'] = $this->_template;
		$arrConfig['activeLink'] = $this->activeLink;
		$arrConfig['middle_link'] = $this->middle;
		$arrConfig['objLang'] = $this->lang;
		$arrConfig['COUNT_ITEM_CART'] = $this->config->item('count_cart');
    	if($this->current_language) {
    		$arrConfig['language_abbr'] = $this->lang_uri_abbr;
		}
		else {
			$arrConfig['language_abbr'] = '';
		}
		//load blocks		
		$objBlock = new Block();
		$arrData = array();
		$arrData['HEADER'] = $objBlock->header($arrConfig);
		$arrData['MENU_TOP'] = $objBlock->menuTop($arrConfig);
		$arrData['LEFT_CONTENT'] = $objBlock->menuLeft($arrConfig);
		$arrData['MIDDLE_LINK'] = $this->middle;
		//add global variable
		$arrData['basePath'] = $this->basePath;
		$arrData['base_url'] = $this->baseUrl;
		$arrData['cssPath'] = $this->cssPath;
		$arrData['jsPath'] = $this->jsPath;
		$arrData['imagePath'] = $this->imagePath;
		$arrData['imageUpload'] = $this->imageUpload;
		//get user access info
		$arrData['ITEM_TITLE'] = $this->lang->line("ITEM_TITLE");
		$arrData['MESSAGE_SYSTEM_CONTENT'] = $this->config->item('message_content');
		$arrData['MESSAGE_SYSTEM_TYPE'] = $this->config->item('message_type');
		$arrData['ERROR_VALIDATE_MESSAGE'] = $this->config->item('arrErrorMessage');
		return $arrData;
    }

}
?>