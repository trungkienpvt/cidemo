<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
require_once (APPPATH . 'libraries/base_controller.php');
class Users extends Base_Controller {
	public function form_validates() {
		$config = array (array ('field' => 'fullname', 'label' => 'Fullname', 'rules' => 'required' ), array ('field' => 'username', 'label' => 'Username', 'rules' => 'required' ), array ('field' => 'password', 'label' => 'Password', 'rules' => 'required' ), array ('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email|is_unique[users.email]' ) );
		$this->form_validation->set_rules ( $config );
		if ($this->form_validation->run () == FALSE)
			return false;
		else
			return true;
	
	}
	public function logout() {
		$this->load->model ( 'Model_Users' );
		$this->Model_Users->logout ( $this->url ( 'users/login' ) );
	
	}
	public function login() {
		if (! parent::check_login ())
			parent::baseLogin ();
		else
			redirect ( $this->url ( 'users/index' ) );
	
	}
	public function index() {
		
		$acl = new Zacl ();
		//		$userRole = $this->session->userdata('user_role');
		//		if($acl->check_acl('user_management', $userRole))
		//			die("ok, you can access this action");
		//		else
		//			die("ok, you can't access this action");
		

		$this->load->helper ( "myutility" );
		$langCurrent = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'users', $langCurrent );
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$limitPerPage = $this->config->item ( 'limit_of_page' );
		$this->load->model ( 'Model_Users' );
		$modelUser = new Model_Users ();
		$lang = $this->uri->segment ( 1 );
		if (isset ( $language_abbr ) && strlen ( $language_abbr ) == 2)
			$page = $this->uri->segment ( 5 );
		else
			$page = $this->uri->segment ( 4 );
		if (empty ( $page )) {
			$page = 0;
		}
		$config ['cur_page'] = $page;
		if ($language_abbr != $this->config->item ( 'language_abbr' ))
			$middle = 'backend/' . $language_abbr . '/';
		else
			$middle = 'backend/';
		$searchKey = $this->input->post ( "keysearch" );
		$where = array ();
		$whereLike = array ();
		if (isset ( $searchKey ) && $searchKey != "") {
			$whereLike ['fullname'] = $searchKey;
			$whereLike ['username'] = $searchKey;
		}
		$config ['base_url'] = $this->url ( "users/index" . "/page" );
		$config ['total_rows'] = $modelUser->getNumItem ( $where, $whereLike );
		//		$config['total_rows'] = 10;
		$config ['per_page'] = $limitPerPage;
		$preData = $this->mtemplate->getData ();
		$data = array ();
		$data ['PREDATA'] = $preData;
		//get paging link
		$config ['base_url'] = $this->mtemplate->baseUrl . "user/index/page";
		$userList = $modelUser->getList ( '*', $page, $limitPerPage, $where, $whereLike );
		$data ['NUM_ROW'] = count ( $userList );
		$data ['USER_LIST'] = $userList;
		$data ['PAGINATION_STRING'] = $this->pagination->create_links ();
		$data ['layout_content'] = $this->load->view ( "templates/" . $this->mtemplate->_template . "/index_users", $data, true );
		$data ['title_page'] = $this->lang->line ( 'PRODUCT_LIST' );
		//Load language key
		$data ['PAGE_TITLE'] = $this->lang->line ( 'Manage Users' );
		$data ['PLEASE_SELECT'] = $this->lang->line ( 'PLEASE_SELECT' );
		
		$this->load->view ( "templates/" . $this->mtemplate->_template . "/index", $data );
	}
	public function detail() {
		$layout = 'article';
		$this->load->model ( 'ModelArticle' );
		$data = $this->ModelArticle->Detail ();
		self::loadViewCustom ( 'default', $layout, $data );
	
	}
	public function add() {
		//TRUY VAN DE LAY CAC CATEGORY
		$langCurrent = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'users', $langCurrent );
		$base_url = $this->config->item ( 'base_url' );
		$this->load->model ( 'Model_Users' );
		$this->load->model ( 'Model_Aclrole' );
		
		//check edit or add action
		$lang = $this->uri->segment ( 1 );
		if (isset ( $lang ) && strlen ( $lang ) == 2)
			$id = $this->uri->segment ( 5 );
		else
			$id = $this->uri->segment ( 4 );
			//set role value
		$roleInfo = array ();
		$data = array ();
		if (! empty ( $id )) {
			$userInfo = $this->Model_Users->getItemById ( $id );
			$data ['MY_SELECT'] = $userInfo ['roleid'];
			if (! empty ( $userInfo )) {
				$data ['USER_DATA'] = $userInfo;
			
			} else {
				
				$data ['USER_DATA'] = null;
			}
		} else {
			$data ['USER_DATA'] = null;
			$data ['MY_SELECT'] = 0;
		}
		$listRole = $this->Model_Aclrole->getList ( 'id,name,roleorder', 0, 0 );
		$listRoleText = array ();
		$listRoleValue = array ();
		//initial category option
		$listRoleText [] = "--Choise--";
		$listRoleValue [] = 0;
		foreach ( $listRole as $row ) {
			$listRoleText [] = $row ['name'];
			$listRoleValue [] = $row ['id'];
		
		}
		$this->load->library ( 'mtemplate', array ('language' => $language_abbr, "lang" => $langCurrent ) );
		$preData = $this->mtemplate->getData ();
		$data ['title'] = $this->lang->line ( 'ADD_USER_PAGE_TITLE' );
		'';
		$data ['PREDATA'] = $preData;
		$data ['title_page'] = $this->lang->line ( 'Manage Users' );
		$data ['layout_content'] = $this->load->view ( "templates/" . $this->mtemplate->_template . "/add_users", $data, true );
		$this->load->view ( "templates/" . $this->mtemplate->_template . "/index", $data );
		//Load language key
	}
	public function save() {
		$lang = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'users', $lang );
		//validate form
		$this->load->helper ( array ('form', 'url' ) );
		$id = $this->input->post ( 'id' );
		$fileName = $this->input->post ( 'previewphoto' );
		if (is_array ( $id ))
			$id = $id [0];
		$idString = "";
		$password = '';
		if ($id != 0)
			$idString = "id/$id";
		if (isset ( $id ) && $id != 0) {
			$config = array (array ('field' => 'fullname', 'label' => 'Fullname', 'rules' => 'required' ), array ('field' => 'username', 'label' => 'Username', 'rules' => 'required' ), array ('field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email|edit_unique[users.email.' . $id . ']' ) );
			$this->form_validation->set_rules ( $config );
			if ($this->form_validation->run() == FALSE) {
				$message = validation_errors ();
				$message = str_replace ( "<p>", "", $message );
				$message = str_replace ( "/p", "br/", $message );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'users/add/' . $idString ) );
			}
		
		} else {
			if ($this->form_validates() == FALSE) {
				$message = validation_errors ();
				$message = str_replace ( "<p>", "", $message );
				$message = str_replace ( "/p", "br/", $message );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'users/add/' . $idString ) );
			}
		}
		
		$this->lang->load ( 'users', 'english' );
		$fullName = $this->input->post ( 'fullname' );
		$userName = $this->input->post ( 'username' );
		$password = $this->input->post ( 'password' );
		$role = $this->input->post ( 'role' );
		if ($password != ""){
			$password = md5 ( $password);
		}
		$email = $this->input->post ( 'email' );
		$status = $this->input->post ( 'status' );
		$image = "";
		if ($fileName != "") {
			//load config image
			$imageThumbWidth = $this->config->item ( 'album_thumb_width' );
			$imageThumbHeight = $this->config->item ( 'album_thumb_height' );
			$imageThumbWidthX = $this->config->item ( 'album_thumb_widthx' );
			$imageThumbHeightX = $this->config->item ( 'album_thumb_heightx' );
			$this->load->library ( 'upload', $this->imageConfig );
			if (! ($image = $this->upload->saveImage ( $imageThumbWidth, $imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX, $fileName ))) {
				$message = $this->lang->line ( 'ERROR_MESSAGE_UPLOAD' );
				$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
				redirect ( $this->url ( 'users/add' ) );
			} else {
				$this->db->set ( 'images', $image );
			}
		}
		if ($id == 0) {
			if ($password != ""){
				$this->db->set ( 'password', $password );
			}
			$this->db->set ( 'fullname', $fullName );
			$this->db->set ( 'username', $userName );
			$this->db->set ( 'email', $email );
			$this->db->set ( 'status', $status );
			$this->db->set ( 'roleid', $role );
			$this->db->set ( 'language', 'vietnamese' );
			$dbRet = $this->db->insert ( 'users' );
		
		} else {
			$this->db->set ( 'fullname', $fullName );
			if ($password != ""){
				$this->db->set ( 'password', $password );
			}
				
			$this->db->set ( 'email', $email );
			$this->db->set ( 'status', $status );
			$this->db->set ( 'roleid', $role );
			$this->db->set ( 'language', 'vietnamese' );
			$this->db->where ( 'id', $id );
			$dbRet = $this->db->update ( 'users' );
		
		}
		if (! $dbRet) {
			$message = $this->db->_error_message ();
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "error" ) );
		} else {
			$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
			$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		}
		redirect ( $this->url ( 'users/' ) );
	}
	function delete() {
		$lang = $this->session->userdata ( "language" );
		$language_abbr = $this->session->userdata ( "language_abbr" );
		$this->lang->load ( 'users', $lang );
		$id = $this->input->post ( 'id' );
		if (empty ( $id )) {
			$lang = $this->uri->segment ( 1 );
			if (isset ( $lang ) && strlen ( $lang ) == 2)
				$id = $this->uri->segment ( 5 );
			else
				$id = $this->uri->segment ( 4 );
			$this->db->where ( 'id', $id );
		} else {
			$this->db->where_in ( 'id', $id );
		}
		@$this->db->delete ( 'users' );
		$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
		$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		redirect ( $this->url ( 'users/' ) );
	}
	/**
	 * render preview photo
	 * 
	 */
	public function previewphoto() {
		//update path tmp
		$this->load->library ( 'upload', $this->imageConfig );
		$imagePreviewWidth = $this->config->item ( 'image_preview_width' );
		$imagePreviewHeight = $this->config->item ( 'image_preview_height' );
		if (! $this->upload->previewPhoto ( 'userfile', $imagePreviewWidth, $imagePreviewHeight )) {
			$json ['status'] = 0;
			$json ['issue'] = $this->upload->display_errors ( '', '' );
		
		} else {
			$json ['status'] = 1;
			foreach ( $this->upload->data () as $k => $v ) {
				$json [$k] = $v;
			}
		}
		echo json_encode ( $json );
	}

}
