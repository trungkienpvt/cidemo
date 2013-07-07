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
		$this->load->library('my_utility');
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
		$preData = $this->mtemplate->getData();
		$objString = new StringUtility();
		$data = array();
		$data['PREDATA'] = $preData;
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
		$data['title_page']=$this->lang->line('PRODUCT_LIST');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/index_product", 
		array('PRODUCT_ITEM' =>$productData, 'PAGINATION_STRING'=>$this->pagination->create_links()), true);
		//Load language key
		$data['PAGE_TITLE'] = $this->lang->line('PRODUCT_LIST');
		$data['NAME_TITLE'] = $this->lang->line('NAME_TITLE');
		$data['DESCRIPTION_TITLE'] = $this->lang->line('DESCRIPTION_TITLE');
		$data['CONTENT_TITLE'] = $this->lang->line('CONTENT_TITLE');
		$data['IMAGE_TITLE'] = $this->lang->line('IMAGE_TITLE');
		$data['DATE_CREATE_TITLE'] = $this->lang->line('IMAGE_TITLE');
		$data['ORDERING_TITLE'] = $this->lang->line('ORDERING_TITLE');
		$data['CATEGORY_TITLE'] = $this->lang->line('CATEGORY_TITLE');
		$data['PRICE_TITLE'] = $this->lang->line('PRICE_TITLE');
		$data['EDIT_TITLE'] = $this->lang->line('EDIT_TITLE');
		$data['DELETE_TITLE'] = $this->lang->line('DELETE_TITLE');
		$data['STATUS_TITLE'] = $this->lang->line('STATUS_TITLE');
		$data['URL_ADD_ITEM'] = site_url("product/add");
		$data['NUM_ROW'] = count($productList);
		$data['START_LOOP'] = 0;
		$data['PLEASE_SELECT'] = $this->lang->line('PLEASE_SELECT');
		$data['BREAD_CRUMB'] = $breadCrumb;
		$data['BANNER_TOP'] = 1;
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
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
		$this->load->library('pagination');
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
			$catID = $catData['id'];
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
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$preData = $this->mtemplate->getData();
		$objString = new StringUtility();
		$data = array();
		$data['BREAD_CRUMB'] = $breadCrumb;
		$data['PREDATA'] = $preData;
		$data['obj_string'] = $objString;
		$data['imagePath'] = $this->config->item('themes_image');
		$data['imageUpload'] = $this->config->item('image_upload_link');
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$data['product_list'] = $productList;
		$productData = $this->load->view("templates/" . $this->mtemplate->_template . "/product-item",$data, true);
		//pagination
		$this->pagination->initialize($config);
		$data['title_page']=$this->lang->line('PRODUCT_LIST');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/product-list", 
		array('PRODUCT_ITEM' =>$productData, 'PAGINATION_STRING'=>$this->pagination->create_links()), true);
		$data['PAGE_TITLE'] = $this->lang->line('PRODUCT_LIST');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['NAME_TITLE'] = $this->lang->line('NAME_TITLE');
		$data['DESCRIPTION_TITLE'] = $this->lang->line('DESCRIPTION_TITLE');
		$data['CONTENT_TITLE'] = $this->lang->line('CONTENT_TITLE');
		$data['IMAGE_TITLE'] = $this->lang->line('IMAGE_TITLE');
		$data['DATE_CREATE_TITLE'] = $this->lang->line('IMAGE_TITLE');
		$data['ORDERING_TITLE'] = $this->lang->line('ORDERING_TITLE');
		$data['CATEGORY_TITLE'] = $this->lang->line('CATEGORY_TITLE');
		$data['PRICE_TITLE'] = $this->lang->line('PRICE_TITLE');
		$data['EDIT_TITLE'] = $this->lang->line('EDIT_TITLE');
		$data['DELETE_TITLE'] = $this->lang->line('DELETE_TITLE');
		$data['STATUS_TITLE'] = $this->lang->line('STATUS_TITLE');
		$data['URL_ADD_ITEM'] = site_url("product/add");
		$data['NUM_ROW'] = count($productList);
		$data['START_LOOP'] = 0;
		$data['PLEASE_SELECT'] = $this->lang->line('PLEASE_SELECT');
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
	
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
		$catID = $productData['category'];
		$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$this->breadcrumb->append_crumb('Catalog', site_url('/') . $middle . "product/catalog/");
		$this->breadcrumb->append_crumb('Lists', site_url('/') . $middle . "category/$catID");
		$this->breadcrumb->append_crumb($productData['name'],'/' );
		$breadCrumb = $this->breadcrumb->output();
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['imagePath'] = $this->config->item('themes_image');
		$data['imageUpload'] = $this->config->item('image_upload_link');
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$data['BREAD_CRUMB'] = $breadCrumb;
		$data['PREDATA'] = $preData;
		$data['PRODUCT_DATA'] = $productData;
		$data['PAGE_TITLE'] = $this->lang->line('PRODUCT_LIST');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['NAME_TITLE'] = $this->lang->line('NAME_TITLE');
		$data['DESCRIPTION_TITLE'] = $this->lang->line('DESCRIPTION_TITLE');
		$data['PLEASE_SELECT'] = $this->lang->line('PLEASE_SELECT');
		$data['PRODUCT_PRICE'] = $this->lang->line('CURRENCY');
		$data['PRODUCT_CURRENCY'] = $this->lang->line('IMAGE_TITLE');
		$data['CLICK_TO_FULL_IMAGE'] = $this->lang->line('CLICK_TO_FULL_IMAGE');
		$data['CONTACT_TEXT'] = $this->lang->line('CONTACT_TEXT');
		$data['EDIT_TITLE'] = $this->lang->line('EDIT_TITLE');
		$data['DELETE_TITLE'] = $this->lang->line('DELETE_TITLE');
		$data['LANGUAGE_ABBR'] = $this->lang->line('$middle');
		$data['URL_ADD_ITEM'] = site_url("product/add");
		$data['PLEASE_SELECT'] = $this->lang->line('PLEASE_SELECT');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/product-detail", 
		$data, true);
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
		
	
	}
	
	/**
	 * todo: get list category
	 */
	public function catalog()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->library('pagination');
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
		$where['level <>'] = 0;	
		$config['base_url'] = site_url('/') . $middle . "product/catalog" . "/page";
		$config['total_rows'] = $this->Model_Category_Product->_getNumItem($where);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$this->pagination->initialize($config);
	 	$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$this->breadcrumb->append_crumb('Catalog', site_url('/') . $middle . "product/catalog/");
		$breadCrumb = $this->breadcrumb->output();
		$categoryList = $this->Model_Category_Product->_getList('*',$page,$limitPerPage, $where);
		$this->load->library('mtemplate',array('language' =>$language_abbr, "lang" =>$langCurrent));
		$this->load->library('my_utility');
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['BREAD_CRUMB'] = $breadCrumb;
		$data['PAGINATION_STRING'] = $this->pagination->create_links();
		$data['PREDATA'] = $preData;
		$data['CATEGORY_LIST'] = $categoryList;
		$data['PAGE_TITLE'] = $this->lang->line('PRODUCT_LIST');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['NAME_TITLE'] = $this->lang->line('NAME_TITLE');
		$data['DESCRIPTION_TITLE'] = $this->lang->line('DESCRIPTION_TITLE');
		$data['PLEASE_SELECT'] = $this->lang->line('PLEASE_SELECT');
		$data['PRODUCT_PRICE'] = $this->lang->line('CURRENCY');
		$data['PRODUCT_CURRENCY'] = $this->lang->line('IMAGE_TITLE');
		$data['CLICK_TO_FULL_IMAGE'] = $this->lang->line('CLICK_TO_FULL_IMAGE');
		$data['CONTACT_TEXT'] = $this->lang->line('CONTACT_TEXT');
		$data['LANGUAGE_ABBR'] = $this->lang->line('middle');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/category-list", 
		$data, true);
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
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
