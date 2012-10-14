<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Banners extends Front_Controller {
	
	public function index()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->load->model("Model_Banners");
		$this->lang->load('banners', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$wheres = array();
		$bannerList = $this->Model_Banners->getList('*',0,$limitPerPage, $wheres);
//		print_r($bannerList);exit;		
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('PAGE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('PRODUCT_LIST'),true);
		$view->assign('layout_content','banner-detail.tpl',true);
		$view->assign('BANNER_LIST',$bannerList,true);
		$view->display('index.tpl');
	}	
	
	
		
}
