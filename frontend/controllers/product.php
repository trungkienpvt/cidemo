<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Product extends Front_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => 'required'
                  )
            );
		$this->form_validation->set_rules($config); 
		if ($this->form_validation->run() == FALSE)
			return false;
		else
			return true;
		
	}
	public function index()
	{
		$this->load->library("StringUtility");
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Product');
		$lang = $this->uri->segment(1);	
		if(isset($lang) && strlen($lang) == 2)
			$page=$this->uri->segment(5);
		else 
			$page=$this->uri->segment(4);
		if(empty($page)) 
		{
			$page = 0;
		}
		$config['cur_page'] = $page;
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		
		$wheres = array();
		$wheres['products.language ='] = $langCurrent;	
		$productList = $this->Model_Product->getList('products.*',$page,$limitPerPage,$wheres);
		for( $i=0;$i<count($productList);$i++)
		{
			$productList[$i]['createdate'] = date('d/m/Y',$productList[$i]['createdate']);
			
		}
		
		
		
		
		$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$breadCrumb = $this->breadcrumb->output();
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$view=$this->mtemplate->preView();
		$objString = new StringUtility();
		$data = array();
		$data['obj_string'] = $objString;
		$data['imagePath'] = $this->config->item('themes_image');
		$data['imageUpload'] = $this->config->item('image_upload_link');
		$data['product_list'] = $productList;
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$productData = $this->load->view("templates/" . $this->mtemplate->_template . "/product-item", 
		$data, true);
		//get paging link
		$config['base_url'] = $this->mtemplate->baseUrl . "product-list/page";
		$wheresNum = array();
		$wheresNum['products.language ='] = $langCurrent;
		$config['total_rows'] = $this->Model_Product->getNumItem($wheresNum);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		
		$view->assign('title_page',$this->lang->line('PRODUCT_LIST'),true);
		$view->assign('layout_content','index_product.tpl',true);
		$view->assign('PRODUCT_ITEM',$productData,true);
		//Load language key
		$view->assign('PAGE_TITLE',$this->lang->line('PRODUCT_LIST'),true);
		$view->assign('NAME_TITLE',$this->lang->line('NAME_TITLE'),true);
		$view->assign('DESCRIPTION_TITLE',$this->lang->line('DESCRIPTION_TITLE'),true);
		$view->assign('CONTENT_TITLE',$this->lang->line('CONTENT_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('DATE_CREATE_TITLE',$this->lang->line('DATE_CREATE_TITLE'),true);
		$view->assign('ORDERING_TITLE',$this->lang->line('ORDERING_TITLE'),true);
		$view->assign('CATEGORY_TITLE',$this->lang->line('CATEGORY_TITLE'),true);
		$view->assign('PRICE_TITLE',$this->lang->line('PRICE_TITLE'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		//pagination
//		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('URL_ADD_ITEM',site_url("product/add"),true);
		$view->assign('NUM_ROW',count($productList),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->assign('BREAD_CRUMB',$breadCrumb,true);
		$view->assign('BANNER_TOP',1,true);
		$view->display('index.tpl');
	}	
	
	/**
	 * get list product
	 */
	
	public function lists()
	{
		$this->load->library("StringUtility");
		$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Product');
		$this->load->model('Model_Category_Product');
								
		$lang = $this->uri->segment(1);
		if($this->config->item("nice_url")) {
			if(isset($lang) && strlen($lang) == 2)
			{
				$page=$this->uri->segment(5);
				$rid = $this->uri->segment(3);
			}
			else
			{ 
				$page=$this->uri->segment(4);
				$rid = $this->uri->segment(2);
			}
			if(empty($page)) 
			{
				$page = 0;
			}
			
			
		}else {
			if(isset($lang) && strlen($lang) == 2)
			{
				$page=$this->uri->segment(7);
				$rid = $this->uri->segment(5);
			}
			else
			{ 
				$page=$this->uri->segment(6);
				$rid = $this->uri->segment(4);
			}
			if(empty($page)) 
			{
				$page = 0;
			}
		
		}	
		$config['cur_page'] = $page;
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		//get category data by rid
		$catData = $this->Model_Category_Product->getItemByRID($rid, $langCurrent, $langDefault);
		if(!empty($catData))
			$catID = $catData['idCategory'];
		else 
			$catID = 0;
		$where = array();
		$where['category ='] = $catID;	
		$config['base_url'] = site_url('/') . $middle . "product/lists/cat/$catID" . "/page";
		$config['total_rows'] = $this->Model_Product->getNumItem($where);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$productList = $this->Model_Product->getList('products.*',$page,$limitPerPage, $where);
		$catData = $this->Model_Product->getCategoryInfo($catID);
		for( $i=0;$i<count($productList);$i++)
		{
			$productList[$i]['createdate'] = date('d/m/Y',$productList[$i]['createdate']);
			
		}
		$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$this->breadcrumb->append_crumb('Catalog', site_url('/') . $middle . "product/catalog/");
		$this->breadcrumb->append_crumb('Lists', site_url('/') . $middle . "product/lists/cat/$catID" . "/page");
		$breadCrumb = $this->breadcrumb->output();
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$objString = new StringUtility();
		$data = array();
		$data['obj_string'] = $objString;
		$data['imagePath'] = $this->config->item('themes_image');
		$data['imageUpload'] = $this->config->item('image_upload_link');
		$data['product_list'] = $productList;
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$productData = $this->load->view("templates/" . $this->mtemplate->_template . "/product-item", 
		$data, true);
		$view->assign('title_page',$catData['catName'],true);
		$view->assign('layout_content','product-list.tpl',true);
		$view->assign('PRODUCT_ITEM',$productData,true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('PAGE_TITLE',$catData['catName'],true);
		$view->assign('NAME_TITLE',$this->lang->line('NAME_TITLE'),true);
		$view->assign('DESCRIPTION_TITLE',$this->lang->line('DESCRIPTION_TITLE'),true);
		$view->assign('CONTENT_TITLE',$this->lang->line('CONTENT_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('DATE_CREATE_TITLE',$this->lang->line('DATE_CREATE_TITLE'),true);
		$view->assign('ORDERING_TITLE',$this->lang->line('ORDERING_TITLE'),true);
		$view->assign('CATEGORY_TITLE',$this->lang->line('CATEGORY_TITLE'),true);
		$view->assign('CATEGORY_NAME',$catData['catName'],true);
		$view->assign('PRICE_TITLE',$this->lang->line('PRICE_TITLE'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('URL_ADD_ITEM',site_url("product/add"),true);
		$view->assign('NUM_ROW',count($productList),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->assign('LANGUAGE_ABBR',$middle,true);
		$view->assign('BREAD_CRUMB',$breadCrumb,true);
		$view->assign('BANNER_TOP',1,true);
		$view->display('index.tpl');
	}	
	
	public function detail()
	{
		
		$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Product');
		$lang = $this->uri->segment(1);
		$rid = 0;
		if($this->config->item("nice_url")) {
			if(isset($lang) && strlen($lang) == 2)
				$rid = $this->uri->segment(3);
			else 
				$rid=$this->uri->segment(2);
			if($language_abbr != $this->config->item('language_abbr'))
				$middle = $language_abbr . '/';
			else
				$middle = '';
		}else {
			if(isset($lang) && strlen($lang) == 2)
				$rid = $this->uri->segment(5);
			else 
				$rid=$this->uri->segment(4);
			if($language_abbr != $this->config->item('language_abbr'))
				$middle = $language_abbr . '/';
			else
				$middle = '';
		
		}
		
		
		$productData = $this->Model_Product->getItemByRID($rid, $langCurrent, $langDefault);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('PRODUCT_TITLE_PAGE') . ' | ' . $productData['name'],true);
		$view->assign('layout_content','product-detail.tpl',true);
		$view->assign('PRODUCT_DATA', $productData, true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('PRODUCT_PAGE_TITLE',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('NAME_TITLE',$this->lang->line('NAME_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('PRODUCT_DETAIL'),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->assign("CLICK_TO_FULL_IMAGE", $this->lang->line('CLICK_TO_FULL_IMAGE'));
		$view->assign("CONTACT_TEXT", $this->lang->line("CONTACT_TEXT"));
		$view->assign('MENU_LEFT',1,true);
		$view->assign('LANGUAGE_ABBR',$middle,true);
		$view->display('index.tpl');
	
	}
	
	/**
	 * todo: get list category
	 */
	public function catalog()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$lang = $this->uri->segment(1);	
		if(isset($lang) && strlen($lang) == 2)
		{
			$page=$this->uri->segment(7);
			$cat = $this->uri->segment(5);
		}
		else
		{ 
			$page=$this->uri->segment(6);
			$cat = $this->uri->segment(4);
		}
		if(empty($page)) 
		{
			$page = 0;
		}
		$config['cur_page'] = $page;
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		$where = array();
		$where['language ='] = $langCurrent;		
		$config['base_url'] = site_url('/') . $middle . "product/catalog" . "/page";
		$config['total_rows'] = $this->Model_Category_Product->getNumItem($where);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
	 	$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$this->breadcrumb->append_crumb('Catalog', site_url('/') . $middle . "product/catalog/");
		$breadCrumb = $this->breadcrumb->output();
		$categoryList = $this->Model_Category_Product->getList('*',$page,$limitPerPage, $where);
		$this->load->library('mtemplate',array('language' =>$language_abbr, "lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('CATALOG'),true);
		$view->assign('layout_content','category-list.tpl',true);
		$view->assign('CATEGORY_LIST',$categoryList,true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('CATEGORY_LIST'),true);
		$view->assign('NAME_TITLE',$this->lang->line('NAME_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('NUM_ROW',count($categoryList),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('LANGUAGE_ABBR',$middle,true);
		$view->assign('BREAD_CRUMB',$breadCrumb,true);
		$view->assign('BANNER_TOP', 1, true);
		$view->display('index.tpl');
		
	}
	
	public function previewphoto()
	{
		//update path tmp
		$this->load->library('upload',$this->imageConfig);
		$imagePreviewWidth = $this->config->item('image_preview_width');
		$imagePreviewHeight = $this->config->item('image_preview_height');
		if ( ! $this->upload->previewPhoto('userfile',$imagePreviewWidth, $imagePreviewHeight))
		{
			$json['status'] = 0;
			$json['issue'] = $this->upload->display_errors('','');
			
		}
		else
		{
			$json['status'] = 1;
			foreach($this->upload->data() as $k => $v)
			{
				$json[$k] = $v;
			}
			
		}
		echo json_encode($json);
	}
		
}
