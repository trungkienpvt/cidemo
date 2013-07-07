<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Albums extends Front_Controller {
	
	public function index()
	{
		$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$this->load->library("StringUtility");
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Album');
		$this->lang->load('albums', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$wheres = array();
		$modelAlbum = new Model_Album();
		$albumtList = $modelAlbum->getList('albums.*',0,$limitPerPage, $wheres);
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$objString = new StringUtility();
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['PREDATA'] = $preData;
		$data['ALBUM_LIST'] = $albumtList;
//		print_r($albumtList);exit;
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/album-detail",$data, true); 
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
	}	
	public function detail(){
		$layout='article';
		$this->load->model('ModelArticle');
		$data=$this->ModelArticle->Detail();
		self::loadViewCustom('default',$layout,$data);
	
	}
	
		
}
