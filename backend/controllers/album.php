<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
require_once (APPPATH . 'libraries/base_controller.php');
class Album extends Base_Controller {
	public function form_validates() {
		$config = array (array ('field' => 'title', 'label' => 'Name', 'rules' => 'required' ) );
		$this->form_validation->set_rules ( $config );
		if ($this->form_validation->run () == FALSE)
			return false;
		else
			return true;
	
	}
	public function index() {
		$this->load->model ( 'Model_Album' );
		$this->load->library('cpagination');
		$defaultLang = $this->config->item ( "language" );
		$arrLang = $this->config->item ( 'lang_uri_abbr' );
		$langCurrent = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'album', $langCurrent );
		$limitPerPage = $this->config->item ( 'limit_of_page' );
		$lang = $this->uri->segment ( 1 );
		$orderName='';
		$orderValue='';
		if(isset($_REQUEST['order_name'])){
			$orderName = $_REQUEST['order_name'];
		}
		if(isset($_REQUEST['order_value'])){
			$orderValue = $_REQUEST['order_value'];
		}
		//get param from query string
		if (isset ( $lang ) && strlen ( $lang ) == 2){
			$page = $this->uri->segment ( 5 );
		}
		else{
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
		$config ['base_url'] = $this->url ( "album/index" . "/page" );
		$wheres = array ();
		$wheresCategory = array();
		//add field to filter
		$wheresLike = array ();
		$searchKey = $this->input->post ( "key_search" );
		$searchCategory = $this->input->post ( "category_search" );
		$searchLang = $this->input->post ( "language_search" );
		$filterArray= array();
		if (isset ( $searchLang ) && $searchLang != '') {
			$wheres ['albums.language'] = $searchLang;
			$wheresCategory ['language'] = $searchLang;
			$this->session->set_userdata(array('language_search'=>$searchLang));
			$filterArray['language_search'] = $searchLang;
		}elseif(!isset($searchLang)){
			$languageFilter = $this->session->userdata('language_search');
			if(isset($languageFilter) && $languageFilter!=''){
				$wheres ['albums.language'] = $languageFilter;
				$wheresCategory ['language'] = $languageFilter;
				$filterArray['language_search'] = $languageFilter;
			}
				
		}
		if (isset ( $searchCategory ) && $searchCategory != '') {
			$wheres ['category'] = $searchCategory;
			$this->session->set_userdata(array('category_search'=>$searchCategory));
			$filterArray['category_search'] = $searchCategory;
		}elseif(!isset($searchCategory)){
			$categoryFilter = $this->session->userdata('category_search');
			if(isset($categoryFilter) && $categoryFilter!=''){
				$wheres ['category'] = $categoryFilter;
				$filterArray['category_search'] = $categoryFilter;
			}
				
		}
		if (isset ( $searchKey ) && $searchKey != '') {
			$wheresLike ['title'] = $searchKey;
			$this->session->set_userdata(array('key_search'=>$searchCategory));
			$filterArray['name_search'] = $searchKey;
		}elseif(!isset($searchKey)){
			$nameFilter = $this->session->userdata('key_search');
			if(isset($nameFilter) && $nameFilter!=''){
				$wheresLike ['title'] = $nameFilter;
				$filterArray['name_search'] = $nameFilter;
			}
				
		}
		//add field to order
		$arrOrder = array('price'=>'asc','ordering'=>'asc');
		$order = array();
		if($orderName!='' && $orderValue!=''){
			$arrOrder[$orderName] = $orderValue;
			$order[$orderName] = $orderValue;
		}
		$config ['total_rows'] = $this->Model_Album->getNumItem ( $wheres, $wheresLike);
		
		//		$config['total_rows'] = 10;
		$config ['per_page'] = $limitPerPage;
		$albumList = $this->Model_Album->getList ( 'albums.*,c.name as cat_name', $page, $limitPerPage, $wheres, $wheresLike, $order );
		
		for($i = 0; $i < count ( $albumList ); $i ++) {
			if ($this->Model_Album->_checkAllTranslate ( $albumList [$i] ['id'] )) {
				$albumList [$i] ['translated'] = false;
			} else {
				$albumList [$i] ['translated'] = true;
			}
		
		}
		//get category list
		$this->load->model ( "Model_Category_Album" );
		$listCategory = $this->Model_Category_Album->_getList ( 'id,name', 0, 0, $wheresCategory );
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$this->load->library ( 'myutility' );
		$preData = $this->mtemplate->getData ();
		$data = array ();
		$data ['PREDATA'] = $preData;
		$data ['NUM_ROW'] = count ( $albumList );
		$data ['list_category'] = $listCategory;
		$data ['album_list'] = $albumList;
		$data ['arr_lang'] = $arrLang;
		$data ['count_lang'] = count ( $arrLang );
		$this->cpagination->initialize ( $config );
		$data ['pagination_string'] = $this->cpagination->create_links ();
		$data ['title_page'] = $this->lang->line ( 'MANAGE_TITLE_PAGE' );
		$data ['default_language'] = $defaultLang;
		$data['filterArray'] = $filterArray;
		$data['arrOrder'] = $arrOrder;
		$data ['layout_content'] = $this->load->view ( "templates/" . $this->mtemplate->_template . "/index_album", $data, true );
		
		$this->load->view ( "templates/" . $this->mtemplate->_template . "/index", $data );
	
	}
	public function detail() {
		$layout = 'article';
		$this->load->model ( 'ModelArticle' );
		$data = $this->ModelArticle->Detail ();
		self::loadViewCustom ( 'default', $layout, $data );
	
	}
	public function add() {
		$this->load->library ( 'ckeditor' );
		$this->load->library ( 'ckfinder' );
		$base_url = $this->config->item ( 'base_url' );
		$langCurrent = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$translateStatus = $this->input->post ( 'translate' );
		$langTranslate = $this->input->post ('language');
		$arrLang = $this->config->item ( 'lang_uri_abbr' );
		$this->lang->load ( 'album', $langCurrent );
		$this->load->model ( 'Model_Album' );
		$this->load->model ( 'Model_Category_Album' );
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$this->load->library ( 'myutility' );
		$editor = new ckeditor ();
		$content_value = '';
		$preData = $this->mtemplate->getData ();
		$data = array ();
		$data ['PREDATA'] = $preData;
		//check edit or add action
		$lang = $this->uri->segment ( 1 );
		if (isset ( $lang ) && strlen ( $lang ) == 2) {
			$id = $this->uri->segment ( 5 );
			$translateStatus = $this->uri->segment ( 8 );
		
		} else {
			$id = $this->uri->segment ( 4 );
			$translateStatus = $this->uri->segment ( 6 );
		
		}
		$editCategory = true;
		if (! empty ( $id )) {
			$albumInfo = $this->Model_Album->getItemById ( $id );
			//check exist translate
			$result = $this->Model_Album->_checkTranslate2($id, $albumInfo['language']);
			if(!empty($result)){
				$editCategory = false;
			}else{
				$editCategory = true;
				$wheres ['id <>'] = $id;
				$wheres ['language'] = $albumInfo['language'];
			}
			$data ['ALBUM_DATA'] = $albumInfo;

		} else {
			$data ['ALBUM_DATA'] = null;
		}
		//load category list
		if ($translateStatus == 1 && $langTranslate != "")
			$where ['language = '] = $langTranslate;
		else
			$where ['language = '] = $langCurrent;
		$listCategory = $this->Model_Category_Album->_getList ( 'id,name', 0, 0, $where );
		if (isset ( $id ) && $id != 0) {
			//get list language to translate
			$data ['arr_lang'] = array ();
			foreach ( $arrLang as $key => $value ) {
				if (! $this->Model_Album->_checkTranslate ( $id, $value )) {
					$data ['arr_lang'] [] = $value;
				}
			
			}
		}
		$data ['list_category'] = $listCategory;
		$data ['editCategory'] = $editCategory;
		$data ['CONTENT_DATA'] = $content_value;
		$data ['title_page'] = $this->lang->line ( 'INDEX_TITLE_PAGE' );
		$data ['TRANSLATE_STATUS'] = $translateStatus;
		$data ['LANGUAGE_TRANSLATE'] = $langTranslate;
		$data ['layout_content'] = $this->load->view ( "templates/" . $this->mtemplate->_template . "/add_album", $data, true );
		$this->load->view ( "templates/" . $this->mtemplate->_template . "/index", $data );
	}
	public function save() {
		$defaultLang = $this->config->item ( "language" );
		$arrLang = $this->config->item ( 'lang_uri_abbr' );
		$langCurrent = $this->session->userdata ( "language" );
		$this->lang->load ( 'album', $langCurrent );
		$this->load->model ( "Model_Album" );
		//validate form
		$id = $this->input->post ( 'id' );
		$fileName = $this->input->post ( 'previewphoto' );
		$title = $this->input->post ( 'title' );
		$links = $this->input->post ( 'links' );
		$ordering = $this->input->post ( 'ordering' );
		$catId = $this->input->post ('category');
		$imageLink = $this->input->post ( 'image_link' );
		$rid = $this->input->post ( 'rid' );
		$translateStatus = $this->input->post ( 'translate' );
		$langTranslate = $this->input->post ( 'language' );
		if (is_array ( $id ))
			$id = $id [0];
		$idString = "";
		if ($id != 0)
			$idString = "id/$id";
		if ($this->form_validates () == FALSE) {
			$message = validation_errors ();
			$message = str_replace ( "<p>", "", $message );
			$message = str_replace ( "/p", "br/", $message );
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
			//			die($this->session->flashdata('message'));
			redirect ( $this->url ( 'album/add/' . $idString ) );
		}
		$image = "";
		$data=array();
		if ($fileName != "") {
			//load config image
			$imageThumbWidth = $this->config->item ( 'album_thumb_width' );
			$imageThumbHeight = $this->config->item ( 'album_thumb_height' );
			$imageThumbWidthX = $this->config->item ( 'album_thumb_widthx' );
			$imageThumbHeightX = $this->config->item ( 'album_thumb_heightx' );
			$imageThumbWidthXX = $this->config->item ( 'album_thumb_widthxx' );
			$imageThumbHeightXX = $this->config->item ( 'album_thumb_heightxx' );
			$this->load->library ( 'upload', $this->imageConfig );
			if (! ($image = $this->upload->saveImage ( $imageThumbWidth, $imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX, $fileName, $imageThumbWidthXX, $imageThumbHeightXX ))) {
				$message = $this->lang->line ( 'ERROR_MESSAGE_UPLOAD' );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'users/add' ) );
			} else {
				$this->db->set ( 'images', $image );
			
			}
		
		}
		if ($id == 0) {
			//case add new item
			$data['title'] = $title;
			$data['links'] = $links;
			$data['ordering'] = $ordering;
			$data['category'] = $catId;
			$data ['language'] = $defaultLang;
			$dbRet = $this->Model_Album->_save($data);
		
		} elseif($translateStatus == 1) {
			//case translate item
			$objData = $this->Model_Album->getItemById($id);
			if($objData['rid']!="")
				$data['rid'] = (int)$objData['rid'];
			else
				$data['rid'] = $id;
			$data['title'] = $title;
			$data['links'] = $links;
			$data['ordering'] = $ordering;
			$data['category'] = $catId;
			$data ['language'] = $langTranslate;
			if ($image == '' && $imageLink != '')
				$data ['images'] = $imageLink;
			$dbRet = $this->Model_Album->_save($data,0,$id );
		
		}else{
			//case edit item
			$data['title'] = $title;
			$data['links'] = $links;
			$data['ordering'] = $ordering;
			$data['category'] = $catId;
			$dbRet = $this->Model_Album->_save($data, $id );
			
		}
		if (! $dbRet) {
			$message = $this->db->_error_message ();
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
		} else {
			$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		}
		redirect ( $this->url ( 'album' ) );
	}
	function delete() {
		$lang = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'album', $lang );
		$id = $this->input->post ( 'id' );
		if (empty ( $id )) {
			$lang = $this->uri->segment ( 1 );
			if (isset ( $lang ) && strlen ( $lang ) == 2) {
				$id = $this->uri->segment ( 5 );
			} else {
				$id = $this->uri->segment ( 4 );
			}
			$this->db->where ( 'id', $id );
		} else {
			$this->db->where_in ( 'id', $id );
		}
		try {
			$this->db->delete ( 'albums' );
			$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		} catch ( Exception $e ) {
		}
		redirect ( $this->url ( 'album' ) );
	}
	/**
	 * todo: update order
	 */
	function updateorder() {
		$lang = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'album', $lang );
		//get order array
		$arrayId = $this->input->post ( 'orderid' );
		foreach ( $arrayId as $item ) {
			$cate = $this->input->post ( "$item" );
			$this->db->set ( 'ordering', $cate );
			$this->db->where ( 'id', $item );
			$this->db->update ( "albums" );
		
		}
		$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
		$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		redirect ( $this->url ( 'album/' ) );
	
	}
	public function previewphoto() {
		$this->_previewphoto();	
	}
	

}
