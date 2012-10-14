<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class AclRole extends Base_Controller {
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

	function index()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('aclrole', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Aclrole');
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
		$config['base_url'] = $this->url("aclrole/index" . "/page");
		$config['total_rows'] = $this->Model_Aclrole->getNumItem(array());
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$roleList=$this->Model_Aclrole->getList('*',$page,$limitPerPage);
		$numRow = $this->Model_Aclrole->getNumItem();
//		print_r($roleList);exit;
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$title_page=$this->lang->line('TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','index_role.tpl',true);
		$view->assign('ROLE_LIST',$roleList,true);
		//Load language key
		$view->assign('ROLE_NAME',$this->lang->line('ROLE_NAME'),true);
		$view->assign('ROLE_ORDER',$this->lang->line('ROLE_ORDER'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('ROLE_TITLE_PAGE'),true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->assign('START_LOOP',0,true);
		$view->assign('NUM_ROW',$numRow,true);
	
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		$view->assign('PAGINATION_STRING',$this->pagination->create_links($middle),true);
		//generate list category
		$view->display('index.tpl');

	}
	
	public function add() 
	{
		//TRUY VAN DE LAY CAC CATEGORY
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('aclrole', $lang);
		$base_url=$this->config->item('base_url');
		$this->load->model('Model_Aclrole');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$view=$this->mtemplate->preView();
		//check edit or add action
		$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2)
			$id=$this->uri->segment(5);
		else 
			$id=$this->uri->segment(4);
		
		if(!empty($id))
		{
			$roleInfo=$this->Model_Aclrole->getItemById($id);
			if(!empty($roleInfo))
			{
				$view->assign('ROLE_DATA',$roleInfo,true);
				
			}
			else 
			{
				$view->assign('ROLE_DATA',0,true);
				
			}
		}
		else 
		{
			$view->assign('ROLE_DATA',0,true);
			
		}
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','add_role.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('ROLE_NAME',$this->lang->line('ROLE_NAME'),true);
		$view->assign('ROLE_ORDER',$this->lang->line('ROLE_ORDER'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('ROLE_INFO_TITLE',$this->lang->line('ROLE_INFO_TITLE'),true);
		$view->display('index.tpl');
	}
	
	
	public function save()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('aclrole', $lang);
		//validate form
		$this->load->helper(array('form', 'url'));
		$id = $this->input->post('id');
		if(is_array($id))
			$id=$id[0];
		$idString = "";
		if($id!=0)
			$idString = "id/$id";
		if ($this->form_validates() == FALSE)
		{
			$message=validation_errors();
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
			redirect( $this->url('aclrole/add/'.$idString));
		}
		$name = $this->input->post('name');
		$order = $this->input->post('order');
		if($id==0)
		{
			$this->db->set('name', $name);
			$this->db->set('roleorder', $order);
			$dbRet = $this->db->insert('aclroles'); 
		}
		else
		{
			$this->db->set('name', $name);
			$this->db->set('roleorder', $order);
			$this->db->where('id', $id);
			$dbRet = $this->db->update('aclroles');  
			
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
		redirect($this->url('aclrole/'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('aclrole', $lang);
		$id=$this->input->post('id');
		
		if(empty($id))
		{
			if(isset($language_abbr) && strlen($language_abbr) == 2)
				$id = $this->uri->segment(5);
			else 
				$id = $this->uri->segment(4);
			$this->db->where('id', $id);
		}else
		{
			$this->db->where_in('id', $id);
		}
		$this->db->delete ( 'aclroles' );
		$message = $this->lang->line ( 'SAVE_DATA_SUCCESS' );
		$this->session->set_flashdata ( array ('message_content' => $message, 'message_type' => "warning" ) );
		redirect ( $this->url ( 'aclrole/' ) );
		
	}
}
	
?>