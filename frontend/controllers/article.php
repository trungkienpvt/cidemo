<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Article extends Front_Controller
{
    
    public function aboutus()
    {
    	$this->load->library("Zend");
    	$this->load->model('Model_Article');
		$this->load->model('Model_Category_Article');
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		//get rid of category about us
		$wheres = array();
		$wheres['language ='] = "english";
	 	$wheres['name ='] = "About Us";
	 	$objCategoryArticle = new Model_Category_Article();
		$cateTMP = $objCategoryArticle->getItem($wheres);
		$cateInfo = $objCategoryArticle->getItemByRID($cateTMP['rid'], $langCurrent, $langDefault);
		//get article about us
		$whereArticle = array();
		$whereArticle['category'] = $cateInfo['id'];
		$articleInfo = $this->Model_Article->getItem($whereArticle);
		//check exist data
		if(empty($articleInfo))
			redirect('/my404', 'refresh');
		$lang = $this->uri->segment(1);
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		$this->load->library('mtemplate',array('language' =>$language_abbr, "lang" =>$langCurrent));
		$this->load->library('my_utility');
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['PREDATA'] = $preData;
		$data['ARTICLE'] = $articleInfo;
		$data['PAGE_TITLE'] = $this->lang->line('About Us');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['CLICK_TO_FULL_IMAGE'] = $this->lang->line('CLICK_TO_FULL_IMAGE');
		$data['CONTACT_TEXT'] = $this->lang->line('CONTACT_TEXT');
		$data['LANGUAGE_ABBR'] = $this->lang->line('middle');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/about-us", 
		$data, true);
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);	
	
    
    }
    
    function index(){
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$this->load->library("StringUtility");
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
		$wheres['article.language ='] = $langCurrent;
		$modelArticle = new Model_Article();
		$articleList = $modelArticle->getList("article.*",0,0, $wheres);
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$objString = new StringUtility();
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['PREDATA'] = $preData;
		$data['article_list'] = $articleList;
		$articleData = $this->load->view("templates/" . $this->mtemplate->_template . "/more-article",
		$data, true);
		$data['ARTICLE'] = $articleData;
		$data['PAGE_TITLE'] = $this->lang->line('About Us');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['CLICK_TO_FULL_IMAGE'] = $this->lang->line('CLICK_TO_FULL_IMAGE');
		$data['CONTACT_TEXT'] = $this->lang->line('CONTACT_TEXT');
		$data['LANGUAGE_ABBR'] = $this->lang->line('middle');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/article",
		$data, true); 
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
		    
    }
    
    function detail(){
    	$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->library('my_utility');
		$this->load->library("StringUtility");
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
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
		$modelArticle = new Model_Article();
		$articleInfo = $modelArticle->getItemByRID($rid, $langCurrent, $langDefault);
		//get more acticle
		$whereArticle = array();
		$whereArticle['article.category'] = $articleInfo['category'];
		$whereArticle['article.rid <>'] = $rid;
		$whereArticle['article.language'] = $langCurrent;
		$listData = $modelArticle->getList("article.*",0,0, $whereArticle);
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$objString = new StringUtility();
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['PREDATA'] = $preData;
		$data['article_list'] = $listData;
		$articleList = $this->load->view("templates/" . $this->mtemplate->_template . "/more-article", 
		$data, true);
		$data['ARTICLE'] = $articleInfo;
		$data['MORE_ARTICLE'] = $articleList;
		$data['PAGE_TITLE'] = $this->lang->line('About Us');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['CLICK_TO_FULL_IMAGE'] = $this->lang->line('CLICK_TO_FULL_IMAGE');
		$data['CONTACT_TEXT'] = $this->lang->line('CONTACT_TEXT');
		$data['LANGUAGE_ABBR'] = $this->lang->line('middle');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/article-detail",
		$data, true); 
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
    
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
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['PREDATA'] = $preData;
		$data['ARTICLE_DATA'] = $articleInfo;
		$data['MIDDLE_LINK'] = $middle;
		$view = $this->load->view("templates/" . $this->mtemplate->_template . "/article-preview",$data,true);
		echo $view;
		exit;
    
    }
    
}
