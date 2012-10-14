<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Albums extends Front_Controller {
	
	public function index()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->load->model("Model_Albums");
		$this->lang->load('albums', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$wheres = array();
		$albumtList = $this->Model_Albums->getList('albums.*',0,$limitPerPage, $wheres);
//		print_r($albumtList);exit;		
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('PAGE_TITLE'),true);
		$view->assign('layout_content','album-detail.tpl',true);
		$view->assign('ALBUM_LIST',$albumtList,true);
		$view->assign('MENU_LEFT',1,true);
		$view->display('index.tpl');
	}	
	public function detail(){
		$layout='article';
		$this->load->model('ModelArticle');
		$data=$this->ModelArticle->Detail();
		self::loadViewCustom('default',$layout,$data);
	
	}
	
		
}
