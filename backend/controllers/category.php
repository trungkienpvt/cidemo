<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Category extends Base_Controller {
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
		$this->lang->load('category', $lang);
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Category');
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
		$config['total_rows'] = $this->Model_Category->getNumItem(array());
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$categoryList=$this->Model_Category->getList('*',$page,$limitPerPage);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$title_page=$this->lang->line('TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','index_category.tpl',true);
		$view->assign('ALBUM_LIST',$categoryList,true);
		//Load language key
		$view->assign('CATEGORY_NAME',$this->lang->line('CATEGORY_NAME'),true);
		$view->assign('CATEGORY_PARENT',$this->lang->line('CATEGORY_PARENT'),true);
		$view->assign('CATEGORY_LANGUAGE',$this->lang->line('CATEGORY_LANGUAGE'),true);
		$view->assign('CATEGORY_STATUS',$this->lang->line('CATEGORY_STATUS'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('ALBUM_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		$view->assign('PAGINATION_STRING',$this->pagination->create_links($middle),true);
		//generate list category
		$numCategory = $this->Model_Category->getNumItem(array());
		if($numCategory)
		{
			$number_row = $numCategory;
			$k=1;
			$str="<span class='gi'>|&mdash;</span>";
			$strRow="";
			$arr_lang=array('english','vietnamese');
			foreach($arr_lang as $r){
				$this->Model_Category->showCategoryItem(0,$r,$strRow,$k,$str, 
				array('baseurl' =>$this->mtemplate->basePath, 'imagepath' =>$this->mtemplate->imagePath));	
			}
			$strRow = array_slice($strRow,$page,$limitPerPage);
			$strRow=implode('',$strRow);
			$strRow = preg_replace("|(.+)href='(.+)'(.+)|iUs", "$1href='" . $this->config->item('base_url') . $this->url("$2") ."'$3",$strRow);
		}
		$view->assign('NUM_ROW',$numCategory,true);
		$view->assign('STR_ROW',$strRow,true);
		$view->display('index.tpl');

	}
	
	public function add() 
	{
		//TRUY VAN DE LAY CAC CATEGORY
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('category', $lang);
		$base_url=$this->config->item('base_url');
		$this->load->model('Model_Category');
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
		$categoryInfo = array();
		if(!empty($id))
		{
			$categoryInfo=$this->Model_Category->getItemById($id);
			$view->assign('MY_SELECT',$categoryInfo['idCategory'],true);
			$view->assign('CATEGORY_DATA',$categoryInfo,true);
			$where = array('idCategory <>' => $id);
		}
		else
		{
			$view->assign('MY_SELECT',0,true);
			$view->assign('CATEGORY_DATA',0,true);
			$view->assign('EDIT_FLAG',0,true);
		}
		
		if($categoryInfo)
		//get category list
		if($id!=0)
		{
			$where['lever <='] = $categoryInfo['lever'];
			
		}
		$listCategory = $this->Model_Category->getList('idCategory,catName',0,0,$where);
		$listCategoryValue = array();
		$listCategoryText = array();
		//initial category option
		$listCategoryText[] = "--Choise--";
		$listCategoryValue[] = 0;
		foreach($listCategory as $row)
		{
			$listCategoryText[] = $row['catName'];
			$listCategoryValue[] = $row['idCategory'];	
			
		}
		$view->assign('LIST_CATGORY_TEXT', $listCategoryText);
		$view->assign('LIST_CATGORY_VALUE', $listCategoryValue);
		
		//generate category typ list
		$where2 = array();
		$where2['category_type.language = '] = $this->session->userdata("language");
		$listCategoryType = $this->Model_Category_Type->getList('id,name',0,0,$where2);
		$listCategoryTypeValue = array();
		$listCategoryTypeText = array();
		//initial category option
		$listCategoryTypeText[] = "--Choise--";
		$listCategoryTypeValue[] = 0;
		foreach($listCategoryType as $row)
		{
			$listCategoryTypeText[] = $row['name'];
			$listCategoryTypeValue[] = $row['id'];	
			
		}
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = 'backend/' . $language_abbr . '/';
		else
			$middle = 'backend/';
		$urlPost = $this->url("category/getcategorylist");
		$jsScript = '<script>
$(document).ready(function(){
	$("#category_type").change(function(){
		var type = $("#type option:selected").val();
		$.post("'. $urlPost .'",{type:type},function(data){
			$("#category_parent").empty();
			$("#category_parent").html(data);
			});

		});

	
});
</script>
		';
		$view->assign('JS_SCRIPT', $jsScript, true);
		$view->assign('LIST_CATEGORY_TYPE_TEXT', $listCategoryTypeText);
		$view->assign('LIST_CATEGORY_TYPE_VALUE', $listCategoryTypeValue);
		
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','add_category.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('CATEGORY_NAME',$this->lang->line('CATEGORY_NAME'),true);
		$view->assign('CATEGORY_STATUS',$this->lang->line('CATEGORY_STATUS'),true);
		$view->assign('CATEGORY_TYPE',$this->lang->line('CATEGORY_TYPE'),true);
		$view->assign('CATEGORY_TAB',$this->lang->line('CATEGORY_TAB'),true);
		$view->assign('SELECT_STATUS_TITLE',$this->lang->line('SELECT_STATUS_TITLE'),true);
		$view->assign('ACTIVE_TITLE',$this->lang->line('ACTIVE_TITLE'),true);
		$view->assign('UNACTIVE_TITLE',$this->lang->line('UNACTIVE_TITLE'),true);
		$view->assign('CATEGORY_PARENT',$this->lang->line('CATEGORY_PARENT'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('CATEGORY_INFO_TITLE',$this->lang->line('CATEGORY_INFO_TITLE'),true);
		$view->display('index.tpl');
	}
	
	public function save()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('category', $lang);
		//validate form
		$this->load->helper(array('form', 'url'));
		$id = $this->input->post('id');
		$lever = $this->input->post('lever');
		if(is_array($id))
			$id=$id[0];
		$idString = "";
		if($id!=0)
			$idString = "id/$id";
		if ($this->form_validates() == FALSE)
		{
			$message=validation_errors();
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
			redirect( $this->url('category/add/'.$idString));
		}
		$name = $this->input->post('name');
		$parentId = $this->input->post('parent');
		$type = $this->input->post('category_type');
		$status = $this->input->post('status');
		if($id==0)
		{
			$this->db->set('catName', $name);
			$this->db->set('idParent', $parentId);
			$this->db->set('status', $status);
			$this->db->set('category_type', $type);
			$this->db->set('language', $lang);
			if($parentId!=0)
				$this->db->set('lever', $lever + 1);
			$dbRet = $this->db->insert('category'); 
		}
		else
		{
			$this->db->set('catName', $name);
			$this->db->set('idParent', $parentId);
			$this->db->set('status', $status);
			$this->db->set('category_type', $type);
			$this->db->set('language', $lang);
			$this->db->where('idCategory', $id);
			if($parentId!=0)
				$this->db->set('lever', $lever + 1);
			$dbRet = $this->db->update('category');  
			
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
		redirect($this->url('category/'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('category', $lang);
		
		$id=$this->input->post('id');
		if(empty($id))
		{
			$lang = $this->uri->segment(1);	
			if(isset($lang) && strlen($lang) == 2)
				$id=$this->uri->segment(5);
			else 
				$id=$this->uri->segment(4);
			$this->db->where('idCategory', $id);
		}else
		{
			$this->db->where_in('idCategory', $id);
		}
		//check category exist category child or no
		$this->load->model('Model_Category');
		if($this->Model_Category->isExistCategoryChild($id))
		{
			$message = $this->lang->line('EXIST_CATEGORY_CHILD');
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
			redirect($this->url('category/'));
			
			
		}
		else 
		{
			@$this->db->delete('category');
			$message = $this->lang->line('SAVE_DATA_SUCCESS');
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
			redirect($this->url('category/'));
		}
		
	}
	
	/**
	 * get category list by category_type
	 */
	public function getcategorylist()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->load->model('Model_Category');
		$type = $this->input->post('type');
		$where = array();
		$where['category.language = '] = $this->session->userdata("language");
		$where['category_type = '] = $type;
		$list = $this->Model_Category->getList('idCategory,catName',0,0,$where);
		$listCategoryValue = array();
		$listCategoryText = array();
		//initial category option
		$listCategoryText[] = "--Choise--";
		$listCategoryValue[] = 0;
		foreach($list as $row)
		{
			$listCategoryText[] = $row['catName'];
			$listCategoryValue[] = $row['idCategory'];	
			
		}
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$view = $this->mtemplate->loadAjax();
		$view->assign('LIST_CATEGORY_TEXT', $listCategoryText);
		$view->assign('LIST_CATEGORY_VALUE', $listCategoryValue);
		$view->display("list_category_type.tpl");
	}
}
	
?>