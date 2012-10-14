<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Product extends Base_Controller {
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
		$arrLang = $this->config->item('lang_uri_abbr');
//		print_r($arrLang);exit;
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
			$middle = 'backend/' . $language_abbr . '/';
		else
			$middle = 'backend/';
		$config['base_url'] = $this->url("product/index" . "/page");
		$wheresTotal = array();
		$wheresTotal['products.language ='] = $langCurrent;
		$config['total_rows'] = $this->Model_Product->getNumItem($wheresTotal);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$wheres = array();
		$wheres['products.language ='] = $langCurrent; 
		$productList = $this->Model_Product->getList('products.*,c.catName',$page,$limitPerPage, $wheres);
		for( $i=0;$i<count($productList);$i++)
		{
			
			$productList[$i]['createdate'] = date('d/m/Y',$productList[$i]['createdate']);
			foreach($arrLang as $key=>$value){
				$rid = $productList[$i]['rid'];
				$dataTMP = $this->Model_Product->getItemByRID($rid, $value);
				if(!empty($dataTMP))
					$productList[$i][$value] = $dataTMP['id'];
				else
					$productList[$i][$value] = 0;
				
			}
			
			
		}
		//get category list
		$this->load->model("Model_Category_Product");
		$where = array();
		$where['language = '] = $langCurrent;
		$listCategory = $this->Model_Category_Product->getList('idCategory,catName',0,0,$where);
		$listCategoryValue = array();
		$listCategoryText = array();
		//initial category option
		$listCategoryText[] = $this->lang->line('CHOICE_TITLE');
		$listCategoryValue[] = 0;
		foreach($listCategory as $row)
		{
			$listCategoryText[] = $row['catName'];
			$listCategoryValue[] = $row['idCategory'];	
			
		}
		
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('myutility3');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('LIST_CATGORY_TEXT', $listCategoryText);
		$view->assign('LIST_CATGORY_VALUE', $listCategoryValue);
		$view->assign('title_page',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('layout_content','index_product.tpl',true);
		$view->assign('PRODUCT_LIST',$productList,true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('PRODUCT_PAGE_TITLE',$this->lang->line('MANAGE_TITLE_PAGE'),true);
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
		$view->assign('PAGE_TITLE',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('ARR_LANG', $arrLang,true);
		$view->assign('COUNT_LANG', count($arrLang),true);
		$view->assign('TRANSLATED_STATUS', $this->lang->line('TRANSLATED_STATUS'),true);
		$view->assign('TRANSLATE_STATUS', $this->lang->line('TRANSLATE_STATUS'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('URL_ADD_ITEM',$this->url("product/add"),true);
		$view->assign('NUM_ROW',count($productList),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->display('index.tpl');
	}	
	public function detail()
	{
		$layout='article';
		$this->load->model('ModelArticle');
		$data=$this->ModelArticle->Detail();
		self::loadViewCustom('default',$layout,$data);
	
	}
	public function add() 
	{
		//TRUY VAN DE LAY CAC CATEGORY
		$this->load->library('ckeditor'); 
		$this->load->library('ckfinder');
		$base_url=$this->config->item('base_url');
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$translateStatus = $this->input->post('translate');
		$langTranslate = $this->input->post('lang_translate');
		$this->lang->load('product', $langCurrent);
		$editor= new ckeditor ();
		$content_value = '';
		$this->load->model('Model_Product');
		$this->load->model('Model_Category_Product');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('myutility3');
		$view=$this->mtemplate->preView();
		//check edit or add action
		$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2){
			$id=$this->uri->segment(5);
			$translateStatus = $this->uri->segment(7);
			$langTranslate = $this->uri->segment(9);
		}
		else{ 
			$id=$this->uri->segment(4);
			$translateStatus = $this->uri->segment(6);
			$langTranslate = $this->uri->segment(8);
		}
		
		if(!empty($id))
		{
			$productInfo=$this->Model_Product->getItemById($id);
//			print_r($productInfo);exit;
			if(!empty($productInfo))
			{
				$editor->config['tabIndex'] = 3;
				$content_value = $editor->editor('content',$productInfo['content']);
				$editor->config['tabIndex'] = 2;
				$description_value = $editor->editor('description',$productInfo['description']);
				//for translate product
				if($translateStatus==1) {
					$catIdTMP = $productInfo['category'];
					$catInfoTMP = $this->Model_Category_Product->getItemById($catIdTMP);
					$catForTranslate = $this->Model_Category_Product->getItemByRID($catInfoTMP['rid'], $langTranslate);
					$view->assign('MY_SELECT',$catForTranslate['idCategory'],true);	
				
				}else {
					$view->assign('MY_SELECT',$productInfo['category'],true);
				}
				$view->assign('EDIT_FLAG',1,true);
				$view->assign('PRODUCT_DATA',$productInfo,true);
			}
			else
			{
				$editor->config['tabIndex'] = 3;
				$content_value = $editor->editor('content');
				$editor->config['tabIndex'] = 2;
				$description_value = $editor->editor('description');
				$view->assign('EDIT_FLAG',0,true);
				$view->assign('PRODUCT_DATA',0,true);
				$view->assign('MY_SELECT',0,true);
			}
//			die($productInfo['category']);
			
		}
		else
		{
			$editor->config['tabIndex'] = 3;
			$content_value = $editor->editor('content');
			$editor->config['tabIndex'] = 2;
			$description_value = $editor->editor('description');
			$view->assign('PRODUCT_DATA',0,true);
			$view->assign('EDIT_FLAG',0,true);
			$view->assign('MY_SELECT',0,true);
		}
		$scriptJs ='<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "' . $this->mtemplate->baseUrl . 'product/previewphoto/",
			responseType: "json",
			onChange : function(file , ext) 
			{
					},
					onSubmit : function(file , ext)
					{
						// Allow only images. You should add security check on the server-side.
						if (ext && /^(gif|jpg|jpeg|png)$/i.test(ext))
						{
							/* Change status text */
							$("#upload-div .text").text("Uploading " + file);
							$("#loader_overlay").show();
							$("#loader").show();
							//this.disable();
						} 
						else 
						{
							// extension is not allowed
							$("#upload-div .text").text("Error: only images are allowed");
							// cancel upload
							return false;
						}
					},
					onComplete : function(file, response)
					{
						$("#loader").hide();
						$("#loader_overlay").hide();
						if (response.status == 1) {
							$("#preview").html("<img src=\'' . $base_url . 'data/tmp/thumb/" + response.file_name + "\' />");
							$("#previewphoto").val(response.file_name);
						} else {
							alert("Error uploading file");
							$("#preview").html("Upload FAILED");
						}
					}
				});
 		});
 		</script>
 		';
		//load category list
		if($translateStatus == 1 && $langTranslate !="")
			$where['language = '] = $langTranslate;
		else
			$where['language = '] = $langCurrent;
		$listCategory = $this->Model_Category_Product->getList('idCategory,catName',0,0,$where);
		$listCategoryValue = array();
		$listCategoryText = array();
		//initial category option
		$listCategoryText[] = $this->lang->line('CHOICE_TITLE');
		$listCategoryValue[] = 0;
		foreach($listCategory as $row)
		{
			$listCategoryText[] = $row['catName'];
			$listCategoryValue[] = $row['idCategory'];	
			
		}
		$view->assign('LIST_CATGORY_TEXT', $listCategoryText);
		$view->assign('LIST_CATGORY_VALUE', $listCategoryValue);
		$view->assign('CATEGORY_TITLE', $this->lang->line('CATEGORY_TITLE'),true);
		//load fckeditor
		$view->assign('CONTENT_DATA',$content_value,true);
		$view->assign('DESCRIPTION_DATA',$description_value,true);
		$view->assign('title_page',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('layout_content','add_product.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('PRODUCT_INFO_TITLE',$this->lang->line('PRODUCT_INFO_TITLE'),true);
		$view->assign('PRODUCT_PAGE_TITLE',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('NAME_TITLE',$this->lang->line('NAME_TITLE'),true);
		$view->assign('DESCRIPTION_TITLE',$this->lang->line('DESCRIPTION_TITLE'),true);
		$view->assign('CONTENT_TITLE',$this->lang->line('CONTENT_TITLE'),true);
		$view->assign('DESCRIPTION_TITLE',$this->lang->line('DESCRIPTION_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('DATE_CREATE_TITLE',$this->lang->line('DATE_CREATE_TITLE'),true);
		$view->assign('ORDERING_TITLE',$this->lang->line('ORDERING_TITLE'),true);
		$view->assign('CATEGORY_TITLE',$this->lang->line('CATEGORY_TITLE'),true);
		$view->assign('PRICE_TITLE',$this->lang->line('PRICE_TITLE'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('UPLOAD_TITLE',$this->lang->line('UPLOAD_TITLE'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('SCRIPT_PREVIEW',$scriptJs,true);
		$view->assign('TRANSLATE_STATUS',$translateStatus,true);
		$view->assign('LANGUAGE_TRANSLATE',$langTranslate,true);
		$view->display('index.tpl');
	}
	public function save()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->model("Model_Product");
		//validate form
		$this->load->helper(array('form', 'url'));
		$id=$this->input->post('id');
		$fileName = $this->input->post('previewphoto');
		$name=$this->input->post('name');
		$description=$this->input->post('description');
		$content=$this->input->post('content');
		$ordering = $this->input->post('ordering');
		$price=$this->input->post('price');
		$catId = $this->input->post('category');
		$imageLink = $this->input->post('image_link');
		$rid = $this->input->post('rid');
		$translateStatus = $this->input->post('translate');
		$langTranslate = $this->input->post('lang_translate');
		if(is_array($id))
			$id=$id[0];
		$idString = "";
		if($id!=0)
			$idString = "id/$id";
		if ($this->form_validates() == FALSE)
		{
			$message=validation_errors();
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
//			die($this->session->flashdata('message'));
			redirect($this->url('product/add/'.$idString));
		}
		$image="";
		if($fileName !="")
		{
			//load config image
			$imageThumbWidth=$this->config->item('product_thumb_width');
			$imageThumbHeight=$this->config->item('product_thumb_height');
			$imageThumbWidthX=$this->config->item('product_thumb_widthx');
			$imageThumbHeightX=$this->config->item('product_thumb_heightx');
			$imageThumbWidthXX=$this->config->item('product_thumb_widthxx');
			$imageThumbHeightXX=$this->config->item('product_thumb_heightxx');
			$this->load->library('upload',$this->imageConfig);
			if ( ! ($image=$this->upload->saveImage($imageThumbWidth,
			$imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX,$fileName, $imageThumbWidthXX, $imageThumbHeightXX)))
			{
				$message = $this->lang->line('ERROR_MESSAGE_UPLOAD');
				$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
				redirect($this->url('users/add'));
			}else {
				$this->db->set('images', $image);
			
			}
			
		}
		if($id==0 || ($rid !=0 && $translateStatus ==1))
		{
			//get max rid
			$maxRID = $this->Model_Product->getMaxRID();
			$this->db->set('name', $name);
			$this->db->set('description', $description);
			$this->db->set('content', $content);
			$this->db->set('ordering', $ordering);
			$this->db->set('price', $price);
			$this->db->set('createdate', time());
			$this->db->set('category', $catId);
			if($translateStatus == 1){
				if($image == '' && $imageLink != "")
					$this->db->set('images', $imageLink);
				$this->db->set('language', $langTranslate);
				$this->db->set('rid', $rid);
			}
			else{
				$this->db->set('language', $langCurrent);
				$this->db->set('rid', $maxRID + 1);			
			}
			$dbRet = $this->db->insert('products'); 
			
		}
		else
		{
			$this->db->set('name', $name);
			$this->db->set('description', $description);
			$this->db->set('content', $content);
			$this->db->set('description', $content);
			$this->db->set('ordering', $ordering);
			$this->db->set('price', $price);
			$this->db->set('createdate', time());
			$this->db->set('category', $catId);
			$this->db->set('language', $langCurrent);
			$this->db->where('id', $id);
			$dbRet = $this->db->update('products');  
			
		}
		if(!$dbRet)
		{
			$message = $this->db->_error_message();
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
		}
		else 
		{
			$message = $this->lang->line('SAVE_DATA_SUCCESS');
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));	
		}
		redirect($this->url('product'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $lang);
		$id = $this->input->post('id');
		if(empty($id))
		{
			$lang = $this->uri->segment(1);			
			if(isset($lang) && strlen($lang) == 2)
			{
				$id=$this->uri->segment(5);
			}
			else
			{ 
				$id=$this->uri->segment(4);
			}
			$this->db->where('id', $id);
		}else
		{
			$this->db->where_in('id', $id);
		}
		try {
			$this->db->delete('products');
			$message = $this->lang->line('SAVE_DATA_SUCCESS');
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
		}catch(Exception $e) {
		}
		redirect($this->url('product'));
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
	
	/**
	 * todo: search data
	 */
	public function search() {
		
		$arrLang = $this->config->item('lang_uri_abbr');
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		$limitPerPage = 3;
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
		//get search data
		$txtSearch = $this->input->post("txtsearch");
		$cate = $this->input->post("category");
		if($txtSearch=='') {
			if($this->session->userdata("txtsearch")=="")
				$this->session->set_userdata(array("txtsearch" =>''));
		}else {
			$this->session->set_userdata(array("txtsearch" =>$txtSearch));
		}
		if($cate=='') {
			if($this->session->userdata("category_search")=='')
				$this->session->set_userdata(array("category_search" =>0));
		}else {
			$this->session->set_userdata(array("category_search" =>$cate));
		}
		$txtSearch = $this->session->userdata("txtsearch");
		$cate = $this->session->userdata("category_search"); 
		$this->load->model("Model_Product");
		$arraySearch = array();
		$arraySearch = explode(" ", $txtSearch);
		$wheres = array();
		$wheres['products.language ='] = $langCurrent;
		if(!empty($cate) && $cate!=0) {
			$wheres['category ='] = $cate;
			
		}
		$productList = $this->Model_Product->searchData($page, $limitPerPage, $arraySearch, $wheres);
		$config = array();
		$config['cur_page'] = $page;
		$config['base_url'] = $this->url("product/search" . "/page");
		$wheresTotal = array();
		$wheresTotal['products.language ='] = $langCurrent;
		$config['total_rows'] = $this->Model_Product->countSearch($arraySearch, $wheres);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		 
		for( $i=0;$i<count($productList);$i++)
		{
			
			$productList[$i]['createdate'] = date('d/m/Y',$productList[$i]['createdate']);
			foreach($arrLang as $key=>$value){
				$rid = $productList[$i]['rid'];
				$dataTMP = $this->Model_Product->getItemByRID($rid, $value);
				if(!empty($dataTMP))
					$productList[$i][$value] = $dataTMP['id'];
				else
					$productList[$i][$value] = 0;
				
			}
			
			
		}
		//get category list
		$this->load->model("Model_Category_Product");
		$where = array();
		$where['language = '] = $langCurrent;
		$listCategory = $this->Model_Category_Product->getList('idCategory,catName',0,0,$where);
		$listCategoryValue = array();
		$listCategoryText = array();
		//initial category option
		$listCategoryText[] = $this->lang->line('CHOICE_TITLE');
		$listCategoryValue[] = 0;
		foreach($listCategory as $row)
		{
			$listCategoryText[] = $row['catName'];
			$listCategoryValue[] = $row['idCategory'];	
			
		}
		
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('myutility3');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('LIST_CATGORY_TEXT', $listCategoryText);
		$view->assign('LIST_CATGORY_VALUE', $listCategoryValue);
		$view->assign('title_page',$this->lang->line('SEARCH_TITLE_PAGE'),true);
		$view->assign('layout_content','product-search.tpl',true);
		$view->assign('PRODUCT_LIST',$productList,true);
		//Load language key
		$view->assign('PRODUCT_PAGE_TITLE',$this->lang->line('SEARCH_TITLE_PAGE'),true);
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
		$view->assign('PAGE_TITLE',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('ARR_LANG', $arrLang,true);
		$view->assign('MY_SELECT',$cate,true);
		$view->assign('COUNT_LANG', count($arrLang),true);
		$view->assign('TRANSLATED_STATUS', $this->lang->line('TRANSLATED_STATUS'),true);
		$view->assign('TRANSLATE_STATUS', $this->lang->line('TRANSLATE_STATUS'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('URL_ADD_ITEM',$this->url("product/add"),true);
		$view->assign('NUM_ROW',count($productList),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->display('index.tpl');
		
	}
		
}
