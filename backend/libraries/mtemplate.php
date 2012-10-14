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
			$this->middle = $lang . '/'; 
			$this->activeLink = $this->uri->segment(2);  
		}
		else{ 
			$this->middle = ""; 
			$this->activeLink = $this->uri->segment(1);
		}    	
		$this->basePath = $this->config->item('base_url');
		$this->cssPath=$this->config->item('themes_css');
		$this->jsPath=$this->config->item('themes_js');
		$this->imagePath=$this->config->item('themes_image');
		$this->imageUpload=$this->config->item('image_upload_link');
		return true;
    }
    public function preView()
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
		$this->load->model('MMenu');
		$cssPath = $this->config->item('themes_css');
		$jsPath = $this->config->item('themes_js');
		$imagePath = $this->config->item('themes_image');
		$imageUpload = $this->imageUpload;
		$base_url = $this->baseUrl;
		$base_admin = $this->baseAdminPath;
		$data=array();
		$data['cssPath'] = $this->cssPath;
		$data['jsPath'] = $this->jsPath;
		$data['menutop'] = $this->MMenu->showMenu('menus');
		$menuTop=$this->load->view("templates/$this->_template/menutop", $data, true);
		$smarty->assign('baseUrl',$this->baseUrl,true);
		$smarty->assign('basePath',$this->basePath,true);
		$smarty->assign('cssPath',$cssPath,true);
		$smarty->assign('jsPath',$jsPath,true);
		$smarty->assign('imagePath',$imagePath,true);
		$smarty->assign('imageUpload',$imageUpload,true);
		$smarty->assign('menutop',$menuTop,true);
		//load block data
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
//		print_r($arrConfig['objLang']);exit;
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
		$this->load->model('MMenu');
		$cssPath = $this->config->item('themes_css');
		$jsPath = $this->config->item('themes_js');
		$imagePath = $this->config->item('themes_image');
		$imageUpload = $this->imageUpload;
		$base_url = $this->basePath;
		$base_admin = $this->baseAdminPath;
		$data=array();
		$smarty->assign('baseUrl',$base_url,true);
		$smarty->assign('baseAdmin',$base_admin,true);
		$smarty->assign('cssPath',$cssPath,true);
		$smarty->assign('jsPath',$jsPath,true);
		$smarty->assign('imagePath',$imagePath,true);
		$smarty->assign('imageUpload',$imageUpload,true);
		return $smarty;
		
	}
	

}
?>