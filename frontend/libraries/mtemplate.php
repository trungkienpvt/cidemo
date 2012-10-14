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
	public function __construct ($arrConfig)
    {
    	parent::__construct();
    	//check load image captcha
    	global $URI, $CFG;
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
    public function preView($messageArray=array())
    {
//    	$this->output->enable_profiler(TRUE);
//		echo($errMessage);exit;
		$this->load->library('smarty');
		$this->load->library('my_utility');
		$this->lang->load('menutop', $this->language);
		$this->lang->load('languages', $this->language);
		$smarty = new CI_Smarty();
		$smarty->setTemplate($this->_template);
		//$smarty->force_compile = true;
		$smarty->debugging = false;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		//get menu top
		$this->load->model('MMenu');
		$cssPath = $this->config->item('themes_css');
		$jsPath = $this->config->item('themes_js');
		$imagePath = $this->config->item('themes_image');
		$imageUpload = $this->imageUpload;
		$indexPage = $this->config->item('index_page'); 
		$smarty->assign('baseUrl',$this->baseUrl,true);
		$smarty->assign('basePath',$this->basePath,true);
		$smarty->assign('cssPath',$cssPath,true);
		$smarty->assign('jsPath',$jsPath,true);
		$smarty->assign('imagePath',$imagePath,true);
		$smarty->assign('imageUpload',$imageUpload,true);
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
    	if($this->current_language) {
    		$arrConfig['language_abbr'] = $this->lang_uri_abbr;
			
		}
		else {
			$arrConfig['language_abbr'] = '';
		}
		//load blocks		
		$objBlock = new Block();
		$objBlock->menuTop($arrConfig, $smarty);
		$objBlock->menuLeft($arrConfig, $smarty);
		$objBlock->menuRight($arrConfig, $smarty);
		$objBlock->rightHeader($arrConfig, $smarty);
		$objBlock->banner($arrConfig, $smarty);
//		$objBlock->getComputerInfo($arrConfig, $smarty);
		$smarty->assign("COMPUTER_INFO",'',true);
		//get user access info
		
		$smarty->assign("MIDDLE_LINK",$this->middle,true);
		$smarty->assign("CART_LINK_HEADER",$this->lang->line("CART_LINK_HEADER"),true);
		$smarty->assign("ITEM_TITLE",$this->lang->line("ITEM_TITLE"),true);
        $smarty->assign("COUNT_ITEM_CART",$this->config->item('count_cart'),true);
		$smarty->assign("MENU_LEFT",0,true);
		$smarty->assign("BANNER_TOP",0,true);
		$smarty->assign("MESSAGE_SYSTEM_CONTENT",$this->config->item('message_content'),true);
		$smarty->assign("MESSAGE_SYSTEM_TYPE",$this->config->item('message_type'),true);
		return $smarty;
		
	}
	
//load ajax view
	public function loadAjax()
	{
		global $URI, $CFG;
		$this->load->library('smarty');
		$smarty = new CI_Smarty();
		$smarty->setTemplate($this->_template);
		//$smarty->force_compile = true;
		$smarty->debugging = false;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
		//get menu top
		$cssPath = $this->config->item('themes_css');
		$jsPath = $this->config->item('themes_js');
		$imagePath = $this->config->item('themes_image');
		$imageUpload = $this->imageUpload;
		$base_url = $this->basePath;
		$data=array();
		$smarty->assign('baseUrl',$base_url,true);
		$smarty->assign('cssPath',$cssPath,true);
		$smarty->assign('jsPath',$jsPath,true);
		$smarty->assign('imagePath',$imagePath,true);
		$smarty->assign('imageUpload',$imageUpload,true);
		return $smarty;
		
	}

}
?>