<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Article extends Front_Controller
{
    
    public function aboutus()
    {
    	$this->load->library("Zend");
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Article');
		$this->load->model('Model_Category_Article');
		//get rid of category about us
		$wheres = array();
		$wheres['language ='] = "english";
	 	$wheres['catName ='] = "About Us";
	 	$objCategoryArticle = new Model_Category_Article();
		$cateTMP = $objCategoryArticle->getItem($wheres);
		$cateInfo = $objCategoryArticle->getItemByRID($cateTMP['rid'], $langCurrent, $langDefault);
		//get article about us
		$whereArticle = array();
		$whereArticle['idCategory'] = $cateInfo['idCategory'];
		$articleInfo = $this->Model_Article->getItem($whereArticle);
		$lang = $this->uri->segment(1);
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$articleInfo['title'],true);
		$view->assign('layout_content','about-us.tpl',true);
		$view->assign('ARTICLE_DATA', $articleInfo, true);
		//Load language key
		$view->assign('PAGE_TITLE',$this->lang->line('PRODUCT_DETAIL'),true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->assign('MENU_LEFT',1,true);
		$view->assign('LANGUAGE_ABBR',$middle,true);
		$view->display('index.tpl');
    
    }
    
    function index(){
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Article');
		$this->load->model('Model_Category_Article');
		$rid = 0;
		$lang = $this->uri->segment(1);
		if($this->config->item("nice_url")) {
			if(isset($lang) && strlen($lang) == 2)
				$rid = $this->uri->segment(3);
			else 
				$rid=$this->uri->segment(2);
	//			echo($rid);exit;
			if($language_abbr != $this->config->item('language_abbr'))
				$middle = $language_abbr . '/';
			else
				$middle = '';
		}else {
			if(isset($lang) && strlen($lang) == 2)
				$rid = $this->uri->segment(5);
			else 
				$rid=$this->uri->segment(4);
	//			echo($rid);exit;
			if($language_abbr != $this->config->item('language_abbr'))
				$middle = $language_abbr . '/';
			else
				$middle = '';
		}
		//get list another article 
		$wheres = array();
		$wheres['language ='] = "english";
	 	$wheres['catName ='] = "About Us";
	 	$objCategoryArticle = new Model_Category_Article();
		$cateTMP = $objCategoryArticle->getItem($wheres);
		$cateInfo = $objCategoryArticle->getItemByRID($cateTMP['rid'], $langCurrent, $langDefault);
		//get article not about us
		$whereArticle = array();
		$whereArticle['article.rid <>'] = $cateInfo['rid'];
		$whereArticle['article.language ='] = $langCurrent;
		$articleList = $this->Model_Article->getList("article.*",0,0, $whereArticle);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$this->load->library("StringUtility");
		$objString = new StringUtility();
		$data = array();
		$data['obj_string'] = $objString;
		$data['imagePath'] = $this->config->item('themes_image');
		$data['imageUpload'] = $this->config->item('image_upload_link');
		$data['article_list'] = $articleList;
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$articleData = $this->load->view("templates/" . $this->mtemplate->_template . "/more-article", 
		$data, true);
		$view->assign('title_page','News',true);
		$view->assign('layout_content', 'article.tpl', true);
		$view->assign('ARTICLE_LIST', $articleData, true);
		//Load language key
		$view->assign('PAGE_TITLE',$this->lang->line('PRODUCT_DETAIL'),true);
		$view->assign('MENU_LEFT',1,true);
		$view->assign('LANGUAGE_ABBR',$middle,true);
		$view->assign('MIDDLE_LINK', $middle, true);
		$view->display('index.tpl');
    
    }
    
    function detail(){
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Article');
		$this->load->model('Model_Category_Article');
		$rid = 0;
		$lang = $this->uri->segment(1);
		if($this->config->item("nice_url")) {
			if(isset($lang) && strlen($lang) == 2)
				$rid = $this->uri->segment(3);
			else 
				$rid=$this->uri->segment(2);
	//			echo($rid);exit;
			if($language_abbr != $this->config->item('language_abbr'))
				$middle = $language_abbr . '/';
			else
				$middle = '';
		}else {
			if(isset($lang) && strlen($lang) == 2)
				$rid = $this->uri->segment(5);
			else 
				$rid=$this->uri->segment(4);
	//			echo($rid);exit;
			if($language_abbr != $this->config->item('language_abbr'))
				$middle = $language_abbr . '/';
			else
				$middle = '';
		}
		//get article info by rid
		$articleInfo = $this->Model_Article->getItemByRID($rid, $langCurrent, $langDefault);
		//get list another article 
		$wheres = array();
		$wheres['language ='] = "english";
	 	$wheres['catName ='] = "About Us";
	 	$objCategoryArticle = new Model_Category_Article();
		$cateTMP = $objCategoryArticle->getItem($wheres);
		$cateInfo = $objCategoryArticle->getItemByRID($cateTMP['rid'], $langCurrent, $langDefault);
		//get article not about us
		$whereArticle = array();
		$whereArticle['article.idCategory <>'] = $cateInfo['idCategory'];
		$whereArticle['article.rid <>'] = $rid;
		$whereArticle['article.language ='] = $langCurrent;
		$articleList = $this->Model_Article->getList("article.*",0,0, $whereArticle);
		
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$this->load->library("StringUtility");
		$objString = new StringUtility();
		$data = array();
		$data['obj_string'] = $objString;
		$data['imagePath'] = $this->config->item('themes_image');
		$data['imageUpload'] = $this->config->item('image_upload_link');
		$data['article_list'] = $articleList;
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$articleData = $this->load->view("templates/" . $this->mtemplate->_template . "/more-article", 
		$data, true);
		$view->assign('MORE_ARITCLE',$articleData,true);
		$view->assign('title_page',$articleInfo['title'],true);
		$view->assign('layout_content','article-detail.tpl',true);
		$view->assign('ARTICLE_DATA', $articleInfo, true);
		$view->assign('ARTICLE_LIST', $articleList, true);
		//Load language key
		$view->assign('PAGE_TITLE',$this->lang->line('PRODUCT_DETAIL'),true);
		$view->assign('MENU_LEFT',1,true);
		$view->assign('LANGUAGE_ABBR',$middle,true);
		$view->assign('MIDDLE_LINK', $middle, true);
		$view->display('index.tpl');
    
    }
    
    
	function preview(){
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Article');
		$this->load->model('Model_Category_Article');
		$rid = 0;
		$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2)
			$rid = $this->uri->segment(5);
		else 
			$rid=$this->uri->segment(4);
//			echo($rid);exit;
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		//get article info by rid
		$articleInfo = $this->Model_Article->getItemByRID($rid, $langCurrent, $langDefault);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->loadAjax();
		$view->assign('ARTICLE_DATA', $articleInfo, true);
		$view->assign('MIDDLE_LINK', $middle, true);
		
		$view->display('article-preview.tpl');
    
    }
    
}
