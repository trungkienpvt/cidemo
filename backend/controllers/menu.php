<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Menu extends Base_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'status',
                     'label'   => 'Status',
                     'rules'   => 'required'
                  ),
				array(
                     'field'   => 'parents',
                     'label'   => 'Parent',
                     'rules'   => 'required'
                  )                  
              
            );
		$this->form_validation->set_rules($config); 
		if ($this->form_validation->run() == FALSE)
			return false;
		else
			return true;
		
	}

	function index()
	{
		$defaultLang = $this->config->item ( "language" );
		$arrLang = $this->config->item ( 'lang_uri_abbr' );
		$langCurrent = $this->session->userdata ( "language" );
		$langDefault = $this->config->item ( 'language' );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'menu', $langCurrent );
		$limitPerPage = $this->config->item ( 'limit_of_page' );
		$this->load->model ( 'Model_Menu' );
		$this->load->library ( 'cpagination' );
		$orderName='';
		$orderValue='';
		if(isset($_REQUEST['order_name'])){
			$orderName = $_REQUEST['order_name'];
		}
		if(isset($_REQUEST['order_value'])){
			$orderValue = $_REQUEST['order_value'];
		}
		$lang = $this->uri->segment ( 1 );
		if (isset ( $lang ) && strlen ( $lang ) == 2) {
			$page = $this->uri->segment ( 5 );
		} else {
			$page = $this->uri->segment ( 4 );
		}
		
		if (empty ( $page )) {
			$page = 0;
		}
		$config ['cur_page'] = $page;
		if ($language_abbr != $this->config->item ( 'language_abbr' ))
			$middle = 'backend/' . $language_abbr . '/';
		else
			$middle = 'backend/';
		$config ['base_url'] = $this->url ( "category_article/index" . "/page" );
		$wheres = array ();
		$wheresLike = array ();
		$searchKey = $this->input->post ( "keysearch" );
		$searchLang = $this->input->post ( "languagesearch" );
		if (! empty ( $searchLang ) && $searchLang != $defaultLang) {
			$wheres ['language'] = $searchLang;
		}
		if (! empty ( $searchKey ) && $searchKey != "")
			$wheresLike ['name'] = $searchKey;
		//add field to order
		$arrOrder = array('ordering'=>'asc');
		$order = array();
		if($orderName!='' && $orderValue!=''){
			$arrOrder[$orderName] = $orderValue;
			$order[$orderName] = $orderValue;
		}
		$wheres['level <>'] = 0; 
		$categoryList = $this->Model_Menu->_getList ( '*', $page, $limitPerPage, $wheres, $wheresLike, $order );
		//		print_r($categoryList);exit;
		$countCategory = $this->Model_Menu->_getNumItem ( $wheres, $wheresLike );
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$title_page = $this->lang->line ( 'TITLE_PAGE' );
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$preData = $this->mtemplate->getData ();
		$data = array ();
		$data ['PREDATA'] = $preData;
		$data ['NUM_ROW'] = $countCategory;
		$data ['CATEGORY_LIST'] = $categoryList;
		$data ['array_lang'] = $arrLang;
		$number_row = $countCategory;
		$strRow = array ();
		$list = $this->Model_Menu->_getList ( "*", $page, $limitPerPage, $wheres, $wheresLike, $order );
		for($i=0;$i<count($list);$i++){
			if($this->Model_Menu->_checkAllTranslate($list[$i]['id']))
				$list[$i]['translated'] = false;
			else
				$list[$i]['translated'] = true;
		}
		$totalItem = $this->Model_Menu->_getNumItem ( $wheres, $wheresLike );
		$config ['total_rows'] = $totalItem;
		$config ['per_page'] = $limitPerPage;
		$this->cpagination->initialize ( $config );
		$data ['pagination_string'] = $this->cpagination->create_links ();
		$data ['list'] = $list;
		$data ['NUM_ROW'] = $totalItem;
		$data ['default_language'] = $defaultLang;
		$data['arrOrder'] = $arrOrder;
		$data ['layout_content'] = $this->load->view ( "templates/" . $this->mtemplate->_template . "/index_menu", $data, true );
		$this->load->view ( "templates/" . $this->mtemplate->_template . "/index", $data );
	}
	
	public function add() 
	{
		//TRUY VAN DE LAY CAC CATEGORY
		$langCurrent = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'menu', $langCurrent );
		$arrLang = $this->config->item ( 'lang_uri_abbr' );
		$base_url = $this->config->item ( 'base_url' );
		$this->load->model ( 'Model_Menu' );
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$preData = $this->mtemplate->getData ();
		$data = array ();
		$data ['PREDATA'] = $preData;
		$data ['array_lang'] = $arrLang;
		//check edit or add action
		$lang = $this->uri->segment ( 1 );
		if (isset ( $lang ) && strlen ( $lang ) == 2) {
			$id = $this->uri->segment ( 5 );
			$translateStatus = $this->uri->segment ( 8 );
		
		} else {
			$id = $this->uri->segment ( 4 );
			$translateStatus = $this->uri->segment ( 6 );
		
		}
		$wheres = array ();
		$editCategory = true;
		if (! empty ( $id )) {
			$menuInfo = $this->Model_Menu->_getItemById ( $id );
			//check exist translate
			$result = $this->Model_Menu->_checkTranslate2($id, $menuInfo['language']);
			if(!empty($result)){
				$editCategory = false;
			}else{
				$editCategory = true;
				$wheres ['id <>'] = $id;
				$wheres ['language'] = $menuInfo['language'];
			}	
			$data ['menuData'] = $menuInfo;
		} else {
			$data ['menuData'] = null;
		}
		
		$listCategory = $this->Model_Menu->_getList ( '*', 0, 0, $wheres );
		if(empty($listCategory))
			$listCategory = $this->Model_Menu->_getList ( '*', 0, 0);
		if (isset ( $id ) && $id != 0) {
			//get list language to translate
			$data ['arr_lang'] = array ();
			foreach ( $arrLang as $key => $value ) {
				if (! $this->Model_Menu->_checkTranslate ( $id, $value )) {
					
					$data ['arr_lang'] [] = $value;
				}
			
			}
		}
		$data ['category_list'] = $listCategory;
		$data ['TRANSLATE_STATUS'] = $translateStatus;
		$data ['editCategory'] = $editCategory;
		$data ['layout_content'] = $this->load->view ( "templates/" . $this->mtemplate->_template . "/add_menu", $data, true );
		$this->load->view ( "templates/" . $this->mtemplate->_template . "/index", $data );
	}
	
	public function save()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('menu', $langCurrent);
		$this->load->model("Model_Menu");
		//validate form
		$this->load->helper ( array ('form', 'url' ) );
		$id = $this->input->post ( 'id' );
		$name = $this->input->post ( 'name' );
		$tab = $this->input->post("tab");
		$url = $this->input->post("url");
		$parentId = $this->input->post ( 'parents' );
		$status = $this->input->post ( 'status' );
		$fileName = $this->input->post ( 'previewphoto' );
		$imageLink = $this->input->post ( 'image_link' );
		$translateStatus = $this->input->post ( 'translate' );
		$langTranslate = $this->input->post ( 'language' );
		$orderParent = $this->input->post ( "orderParent" );
		//		print_r($this->input->post());exit;
		if (is_array ( $id ))
			$id = $id [0];
		$idString = "";
		if ($id != 0)
			$idString = "id/$id";
			//check case to edit item
		if ($id != 0 && $translateStatus != 1) {
			$config = array (array ('field' => 'name', 'label' => 'Name', 'rules' => 'required|edit_unique[category_article.name.' . $id . ']' ), array ('field' => 'status', 'label' => 'Status', 'rules' => 'required' ) );
			$this->form_validation->set_rules ( $config );
			
			if ($this->form_validation->run () == FALSE) {
				$message = validation_errors ();
				$message = str_replace ( "<p>", "", $message );
				$message = str_replace ( "/p", "br/", $message );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'category_article/add/' . $idString ) );
			}
		} else {
			if ($this->form_validates () == FALSE) {
				$message = validation_errors ();
				$message = str_replace ( "<p>", "", $message );
				$message = str_replace ( "/p", "br/", $message );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'menu/add/' . $idString ) );
			}
		}
		
		$image = "";
		//		die("$langTranslate" . "status" . $translateStatus);
		$data = array ();
		if ($fileName != "") {
			//load config image
			$imageThumbWidth = $this->config->item ( 'product_thumb_width' );
			$imageThumbHeight = $this->config->item ( 'product_thumb_height' );
			$imageThumbWidthX = $this->config->item ( 'product_thumb_widthx' );
			$imageThumbHeightX = $this->config->item ( 'product_thumb_heightx' );
			$this->load->library ( 'upload', $this->imageConfig );
			if (! ($image = $this->upload->saveImage ( $imageThumbWidth, $imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX, $fileName ))) {
				$message = $this->lang->line ( 'ERROR_MESSAGE_UPLOAD' );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'menu/add' ) );
			} else {
				$data ['images'] = $image;
			
			}
		}
		if ($id == 0) {
			$data ['name'] = $name;
			$data ['url'] = $url;
			$data ['parents'] = $parentId;
			$data ['status'] = $status;
			$data['language'] = $langCurrent;
			$dbRet = $this->Model_Menu->_save ( $data );
		} elseif ($translateStatus == 1) {
			$objData = $this->Model_Menu->_getItemById($id);
			if($objData['rid']!="")
				$data['rid'] = (int)$objData['rid'];
			else
				$data['rid'] = $id;
			$data ['name'] = $name;
			$data ['url'] = $url;
			$data ['parents'] = $parentId;
			$data ['status'] = $status;
			if ($image == '' && $imageLink != '')
				$data ['images'] = $imageLink;
			$data ['language'] = $langTranslate;
			$dbRet = $this->Model_Menu->_save ( $data,0,$id );
		} else {
			$data ['name'] = $name;
			$data ['url'] = $url;
			$data ['parents'] = $parentId;
			$data ['status'] = $status;
			$dbRet = $this->Model_Menu->_save ( $data, $id );
		}
		if (! $dbRet) {
			$message = $this->db->_error_message ();
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
		} else {
			$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		}
		redirect ( $this->url ( 'menu/' ) );
	}
	function delete()
	{
		$lang = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'menu', $lang );
		$this->load->model ( "Model_Menu" );
		$id = $this->input->post ( 'id' );
		if (empty ( $id )) {
			$lang = $this->uri->segment ( 1 );
			if (isset ( $lang ) && strlen ( $lang ) == 2) {
				$id = $this->uri->segment ( 5 );
				$langItem = $this->uri->segment ( 7 );
			} else {
				$id = $this->uri->segment ( 4 );
				$langItem = $this->uri->segment ( 6 );
			}
			//check node root or no
			$nodeData = $this->Model_Menu->getNodeInfo($id);
			
			if($nodeData['parents']==0){
				$message = $this->lang->line ( 'CAN NOT DELETE ROOT MENU' );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
				redirect ( $this->url ( 'menu/' ) );
			}
			$result = $this->Model_Menu->getChildCategory ( $id );
			if (!empty($result)) {
					$this->Model_Menu->removeNode($id,'node');
				} else {
					$this->Model_Menu->removeNode($id,'branch');
				}
		}elseif (is_array ( $id )) {
			foreach ( $id as $item ) {
				$result = $this->Model_Menu->getChildCategory ( $item );
				if (!empty($result)) {
					
					$this->Model_Menu->removeNode($item,'node');
				} else {
					$this->Model_Menu->removeNode($item,'branch');
				}
			}
		} else {
			$result = $this->Model_Menu->getChildCategory ( $item );
			if (!empty($result)) {
				$this->Model_Menu->removeNode($id,'node');
			} else {
				$this->Model_Menu->removeNode($id,'branch');
			}
		}
		$message = $this->lang->line ( 'DELETE MENU SUCCESSFUL' );
		$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		redirect ( $this->url ( 'menu/' ) );
		
		
	}
	/**
	 * todo: update order
	 */
	function updateorder(){
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('menu', $lang);
		//get order array
		$numItem = $this->input->post('number_row');
		$arrayId = $this->input->post('orderid');
		foreach($arrayId as $item) {
			$cate = $this->input->post("$item");
			$this->db->set('ordering', $cate);
			$this->db->where('id', $item);
			$this->db->update("menus");
							
		}
		$message = $this->lang->line('SAVE_DATA_SUCCESS');
		$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
		redirect($this->url('menu/'));
		
		
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
	
?>