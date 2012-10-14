<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Users extends Base_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'fullname',
                     'label'   => 'Fullname',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'username',
                     'label'   => 'Username',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email|is_unique[users.email]'
                  )
            );
		$this->form_validation->set_rules($config); 
		if ($this->form_validation->run() == FALSE)
			return false;
		else
			return true;
		
	}	
	public function logout()
	{
		$this->load->model('Model_Users');
        $this->Model_Users->logout($this->url('users/login'));
		
	}
	public function login()
	{
		if(!parent::check_login())
			parent::baseLogin();
		else 
			redirect($this->url('users/index'));
		
	}
	public function index()
	{
		
		$acl = new Zacl();
//		$userRole = $this->session->userdata('user_role');
//		if($acl->check_acl('user_management', $userRole))
//			die("ok, you can access this action");
//		else
//			die("ok, you can't access this action");
		$this->load->helper("myutility");
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('users', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Users');
		$lang = $this->uri->segment(1);
		if(isset($language_abbr) && strlen($language_abbr) == 2)
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
		$config['base_url'] = $this->url("users/index" . "/page");
		$config['total_rows'] = $this->Model_Users->getNumItem(array());
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$userList=$this->Model_Users->getList('*',$page,$limitPerPage);
		$this->lang->load('article', 'english');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('myutility3');
		$title_page=$this->lang->line('ARTICLE_TITLE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page','Manage Users',true);
		$view->assign('layout_content','index_users.tpl',true);
		$view->assign('USER_LIST',$userList,true);
		//Load language key
		$view->assign('FULL_NAME_TITLE',$this->lang->line('FULL_NAME_TITLE'),true);
		$view->assign('USER_NAME_TITLE',$this->lang->line('USER_NAME_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('USER_PAGE_TITLE',$this->lang->line('USER_PAGE_TITLE'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('NUM_ROW',count($userList),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->display('index.tpl');
	}	
	public function detail(){
		$layout='article';
		$this->load->model('ModelArticle');
		$data=$this->ModelArticle->Detail();
		self::loadViewCustom('default',$layout,$data);
	
	}
	public function add() {
		//TRUY VAN DE LAY CAC CATEGORY
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('users', $lang);
		$base_url=$this->config->item('base_url');
		$this->load->model('Model_Users');
		$this->load->model('Model_Aclrole');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$this->load->library('myutility3');
		$data['title']=$this->lang->line('ADD_USER_PAGE_TITLE');'';
		$view=$this->mtemplate->preView();
		//check edit or add action
		$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2)
			$id=$this->uri->segment(5);
		else 
			$id=$this->uri->segment(4);
		//set role value
		$roleInfo = array();
		if(!empty($id))
		{
			$userInfo=$this->Model_Users->getItemById($id);
//			print_r($userInfo);exit;
			$view->assign('MY_SELECT',$userInfo['roleid'],true);
//			die($userInfo['roleid']);
			
//			print_r($userInfo);exit;
			if(!empty($userInfo))
			{
				$view->assign('USER_DATA',$userInfo,true);
			}
			else
			{
				
				$view->assign('USER_DATA',0,true);
			}
		}
		else
		{
			$view->assign('USER_DATA',0,true);
			$view->assign('MY_SELECT',0,true);
		}
		$listRole = $this->Model_Aclrole->getList('id,name,roleorder',0,0);
		$listRoleText = array();
		$listRoleValue = array();
		//initial category option
		$listRoleText[] = "--Choise--";
		$listRoleValue[] = 0;
		foreach($listRole as $row)
		{
			$listRoleText[] = $row['name'];
			$listRoleValue[] = $row['id'];	
			
		}
		$view->assign('LIST_ROLE_TEXT', $listRoleText,true);
		$view->assign('LIST_ROLE_VALUE', $listRoleValue,true);
		$scriptJs ='<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "' . $this->mtemplate->baseUrl . 'users/previewphoto/",
			responseType: "json",
			onChange : function(file , ext) 
			{
						if ( $("select").val() == 0 ) {
							alert("Please select a directory, then Upload");
							return false;
						}
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
		$view->assign('title_page','Manage Users',true);
		$view->assign('layout_content','add_users.tpl',true);
		//Load language key
		$view->assign('FULLNAME_TITLE',$this->lang->line('FULLNAME_TITLE'),true);
		$view->assign('USERNAME_TITLE',$this->lang->line('USERNAME_TITLE'),true);
		$view->assign('EMAIL_TITLE',$this->lang->line('EMAIL_TITLE'),true);
		$view->assign('PASSWORD_TITLE',$this->lang->line('PASSWORD_TITLE'),true);
		$view->assign('SELECT_STATUS_TITLE',$this->lang->line('SELECT_STATUS_TITLE'),true);
		$view->assign('ACTIVE_TITLE',$this->lang->line('ACTIVE_TITLE'),true);
		$view->assign('UNACTIVE_TITLE',$this->lang->line('UNACTIVE_TITLE'),true);
		$view->assign('UPLOAD_TITLE',$this->lang->line('UPLOAD_TITLE'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('USER_INFO_TITLE',$this->lang->line('USER_INFO_TITLE'),true);
		$view->assign('SCRIPT_PREVIEW',$scriptJs,true);
		$view->assign('ROLE_TITLE',$this->lang->line('ROLE_TITLE'),true);
		$view->display('index.tpl');
	}
	public function save()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('albums', $lang);
		//validate form
		$this->load->helper(array('form', 'url'));
		$id=$this->input->post('id');
		$fileName = $this->input->post('previewphoto');
		if(is_array($id))
			$id=$id[0];
		$idString = "";
		if($id!=0)
			$idString = "id/$id";
		if ($this->form_validates() == FALSE)
		{
			$message=validation_errors();
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
			redirect( $this->url('users/add/'.$idString));
		}
		$this->lang->load('users', 'english');
		$fullName=$this->input->post('fullname');
		$userName=$this->input->post('username');
		$role = $this->input->post('role');
		$password=$this->input->post('password');
		if($password!="password")
			$password=md5($this->input->post('password'));
		else
			$password = "";
		$email=$this->input->post('email');
		$status=$this->input->post('status');
		$image="";
		if($fileName!="") 
		{
		//load config image
			$imageThumbWidth=$this->config->item('album_thumb_width');
			$imageThumbHeight=$this->config->item('album_thumb_height');
			$imageThumbWidthX=$this->config->item('album_thumb_widthx');
			$imageThumbHeightX=$this->config->item('album_thumb_heightx');
			$this->load->library('upload',$this->imageConfig);
			if ( ! ($image=$this->upload->saveImage($imageThumbWidth,
			$imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX, $fileName)))
			{
				$message = $this->lang->line('ERROR_MESSAGE_UPLOAD');
				$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
				redirect($this->url('users/add'));
			}else {
				$this->db->set('images', $image);
			}
		}
		if($id==0)
		{
			if($password !="")
				$this->db->set('password', $password);				
			$this->db->set('fullname', $fullName);
			$this->db->set('username', $userName);
			$this->db->set('email', $email);
			$this->db->set('status', $status);
			$this->db->set('roleid',$role);
			$this->db->set('language', 'vietnamese');
			$dbRet = $this->db->insert('users'); 
			
		}
		else
		{
			$this->db->set('fullname', $fullName);
			if($password !="")
				$this->db->set('password', $password);
			$this->db->set('email', $email);
			$this->db->set('status', $status);
			$this->db->set('roleid',$role);
			$this->db->set('language', 'vietnamese');
			$this->db->where('idUser', $id);
			$dbRet = $this->db->update('users');  
			
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
		redirect($this->url('users/'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('users', $lang);
		$id=$this->input->post('id');
		if(empty($id))
		{
			$lang = $this->uri->segment(1);	
			if(isset($lang) && strlen($lang) == 2)
				$id=$this->uri->segment(5);
			else 
				$id=$this->uri->segment(4);
			$this->db->where('idUser', $id);
		}else
		{
			$this->db->where_in('idUser', $id);
		}
		@$this->db->delete('users');
		$message = $this->lang->line('SAVE_DATA_SUCCESS');
		$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
		redirect($this->url('users/'));
	}
/**
	 * render preview photo
	 * 
	 */
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
