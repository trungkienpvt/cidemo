<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class CategoryType extends Base_Controller {
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
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('categorytype', $lang);
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Category_Type');
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
		$config['base_url'] = $this->url("category/index" . "/page");
		$config['total_rows'] = $this->Model_Category_Type->getNumItem(array());
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$where = array();
		$where['language ='] = $this->session->userdata("language");
		$data=$this->Model_Category_Type->getList('*',$page,$limitPerPage, $where);
		$numData = $this->Model_Category_Type->getNumItem();
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$title_page=$this->lang->line('TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','index_categorytype.tpl',true);
		$view->assign('CATEGORY_TYPE_LIST',$data,true);
		$view->assign('NUM_ROW',$numData,true);
		//Load language key
		$view->assign('CATEGORY_TYPE_NAME',$this->lang->line('CATEGORY_TYPE_NAME'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		$view->assign('PAGINATION_STRING',$this->pagination->create_links($middle),true);
		$view->assign('START_LOOP',0,true);
		$view->display('index.tpl');

	}
	
	public function add() 
	{
		//TRUY VAN DE LAY CAC CATEGORY
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('categorytype', $lang);
		$base_url=$this->config->item('base_url');
		$this->load->model('Model_Category_Type');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$view=$this->mtemplate->preView();
		//check edit or add action
		$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2)
			$id=$this->uri->segment(5);
		else 
			$id=$this->uri->segment(4);
		$where = array();
		$categoryTypeInfo = array();
		if(!empty($id))
		{
			$categoryTypeInfo=$this->Model_Category_Type->getItemById($id);
			$view->assign('CATEGORY_TYPE_DATA',$categoryTypeInfo,true);
		}
		else
		{
			$view->assign('CATEGORY_TYPE_DATA',0,true);
		}
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','add_categorytype.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('CATEGORY_TYPE_NAME',$this->lang->line('CATEGORY_TYPE_NAME'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('CATEGORY_TYPE_INFO_TITLE',$this->lang->line('CATEGORY_TYPE_INFO_TITLE'),true);
		$view->display('index.tpl');
	}
	
	
	public function save()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('categorytype', $lang);
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
			redirect( $this->url('categorytype/add/'.$idString));
		}
		$name = $this->input->post('name');
		$language = $lang;
		if($id==0)
		{
			$this->db->set('name', $name);
			$this->db->set('language', $lang);
			$dbRet = $this->db->insert('category_type'); 
		}
		else
		{
			$this->db->set('name', $name);
			$this->db->set('language', $lang);
			$this->db->where('id', $id);
			$dbRet = $this->db->update('category_type');  
			
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
		redirect($this->url('categorytype/'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('categorytype', $lang);
		
		$id=$this->input->post('id');
		if(empty($id))
		{
			$lang = $this->uri->segment(1);	
			if(isset($lang) && strlen($lang) == 2)
				$id=$this->uri->segment(5);
			else 
				$id=$this->uri->segment(4);
			$this->db->where('id', $id);
		}else
		{
			$this->db->where_in('id', $id);
		}
		try
		{
			$this->db->delete('category');
			$message = $this->lang->line('SAVE_DATA_SUCCESS');
		}
		catch(Exception $e)
		{
			$message = $e->getMessage();
			
		}
		$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
		redirect($this->url('categorytype/'));
	}
}
	
?>