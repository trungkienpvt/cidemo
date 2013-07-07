<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MTemplate extends CI_Controller 
{
	public $_template="default";
	public $cssPath=''; 
	public $jsPath='';
	public $imagePath='';
	public $basePath='';
	public $blockData=NULL;
	public $lang_uri_abbr= "";
	public $language = "";
	public $baseUrl='';
	public $k=NULL;
	public $middle = '';
	public $activeLink = '';
	public $current_language = false; 
	public $menuTop = '';
	public $menuLeft = '';
	public $menuRight = '';
	public $righHeader="";
	public $banner = '';
	public function __construct ($arrConfig)
    {
    	parent::__construct();
    	//check load image captcha
    	global $URI, $CFG;
		//get menu top
		$this->load->model('MMenu');
		$config =& $CFG->config;
        $index_page    = $config['index_page'];
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
    	if($langAbbr != $defaultAbbr )
    	{
    		if(!empty($index_page))
    		{
    			$this->baseUrl = $this->config->item('base_url') . $index_page . '/' . $langAbbr . '/';
    		}
    		else 
    		{
    			$this->baseUrl = $this->config->item('base_url') . $langAbbr . '/';
    		}
    	}
    	else {
    		if(!empty($index_page)) {
    			$this->baseUrl = $this->config->item('base_url') . $index_page .'/';
    		}
    		else { 
    			$this->baseUrl = $this->config->item('base_url') ;
    		}
    			
    	}
    	$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2){
			$this->middle = $lang . '/'; 
			$this->activeLink = $this->uri->segment(2);  
		}
		else{ 
			$this->middle = ""; 
			$this->activeLink = $this->uri->segment(1);
		}    	
		$this->basePath=$this->config->item('base_url');
		$this->cssPath=$this->config->item('themes_css');
		$this->jsPath=$this->config->item('themes_js');
		$this->imagePath=$this->config->item('themes_image');
		$this->imageUpload=$this->config->item('image_upload_link');
		$this->fileUpload=$this->config->item('file_upload_link');
		return true;
    }
    //get data for template
    public function getData(){
    	$this->load->library('my_utility');
		$this->lang->load('menutop', $this->language);
		$this->lang->load('languages', $this->language);
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
		$arrConfig['CART_LINK_HEADER'] = $this->lang->line("CART_LINK_HEADER");
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
		$arrData['HEADER_TOP'] = $objBlock->headerTop($arrConfig);
		$arrData['MENU_TOP'] = $objBlock->menuTop($arrConfig);
		$arrData['MENU_LEFT'] = $objBlock->menuLeft($arrConfig);
		$arrData['MENU_RIGHT'] = $objBlock->menuRight($arrConfig);
		$arrData['RIGHT_HEADER'] = $objBlock->rightHeader($arrConfig);
		$arrData['BANNER'] = $objBlock->banner($arrConfig);
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