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
		$arrLang = $this->config->item('lang_uri_abbr');
		$langCurrent = $this->session->userdata("language");
		$langDefault = $this->config->item('language');
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('menu', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Menu');
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
		$config['base_url'] = $this->url("menu/index" . "/page");
		$wheresTotal = array();
		$wheresTotal['menus.language ='] = $langCurrent;
		$config['total_rows'] = $this->Model_Menu->getNumItem($wheresTotal);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$wheres = array();
		$wheres['menus.language ='] = $langCurrent;
		$categoryList = $this->Model_Menu->getList('*',$page,$limitPerPage, $wheres);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$title_page=$this->lang->line('TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','index_menu.tpl',true);
		$view->assign('ALBUM_LIST',$categoryList,true);
		//Load language key
		$view->assign('MENU_MANAGER',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('MENU_NAME',$this->lang->line('MENU_NAME'),true);
		$view->assign('MENU_LINK',$this->lang->line('MENU_LINK'),true);
		$view->assign('MENU_PARENT',$this->lang->line('MENU_PARENT'),true);
		$view->assign('MENU_LANGUAGE',$this->lang->line('MENU_LANGUAGE'),true);
		$view->assign('MENU_STATUS',$this->lang->line('MENU_STATUS'),true);
		$view->assign('MENU_ORDER',$this->lang->line('MENU_TAB'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('ALBUM_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('PLEASE_SELECT',$this->lang->line('PLEASE_SELECT'),true);
		$view->assign('MENU_IMAGE',$this->lang->line('MENU_IMAGE'),true);
		$view->assign('ARR_LANG', $arrLang,true);
		$view->assign('COUNT_LANG', count($arrLang),true);
		$view->assign('TRANSLATED_STATUS', $this->lang->line('TRANSLATED_STATUS'),true);
		$view->assign('TRANSLATE_STATUS', $this->lang->line('TRANSLATE_STATUS'),true);
		
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		$view->assign('PAGINATION_STRING',$this->pagination->create_links($middle),true);
		//generate list category
		$numCategory = $this->Model_Menu->getNumItem(array("language"=>$langCurrent));
		$strRow = '';
		if($numCategory)
		{
			$number_row = $numCategory;
			$k=1;
			$str="<span class='gi'>|&mdash;</span>";
			$strRow = array();
			$this->Model_Menu->showCategoryItem(0,$langCurrent,$strRow,$k,$str, 
				array('baseurl' =>$this->mtemplate->basePath, 'imagePath' =>$this->mtemplate->imagePath, 'imageUpload' =>$this->mtemplate->imageUpload), $arrLang, "english", $this->mtemplate->baseUrl);
		    if(count($strRow)>$limitPerPage)	
				$strRow = array_slice($strRow,$page,$limitPerPage);
			$strRow=implode('',$strRow);
		}
		$view->assign('NUM_ROW',$numCategory,true);
		$view->assign('STR_ROW',$strRow,true);
		$view->display('index.tpl');

	}
	
	public function add() 
	{
		//TRUY VAN DE LAY CAC MENU
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('menu', $langCurrent);
		$base_url=$this->config->item('base_url');
		$translateStatus = $this->input->post('translate');
		$langTranslate = $this->input->post('lang_translate');
		$this->load->model('Model_Menu');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		 
		$view=$this->mtemplate->preView();
		$urlShowList = $this->mtemplate->baseUrl . '';
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
		$whereParent = array();		
		$categoryInfo = array();
		if(!empty($id))
		{
			$categoryInfo=$this->Model_Menu->getItemById($id);
			$view->assign('MY_SELECT',$categoryInfo['idParent'],true);
			$view->assign('MENU_DATA',$categoryInfo,true);
			$whereParent['idMenu <>'] = $id;
		}
		else
		{
			$view->assign('MY_SELECT',0,true);
			$view->assign('MENU_DATA',0,true);
			$view->assign('EDIT_FLAG',0,true);
		}
		//get category list
		if($categoryInfo)
		if($id!=0)
		{
			$whereParent['lever <='] = $categoryInfo['lever'];
			
		}
		$scriptJs ='<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "' . $this->mtemplate->baseUrl . 'menu/previewphoto/",
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
		if($translateStatus ==1 && $langTranslate!="")
			$whereParent['menus.language ='] = $langTranslate;
		else
			$whereParent['menus.language ='] = $langCurrent;
		$listCategory = $this->Model_Menu->getList('idMenu,menuName',0,0,$whereParent);
		$listCategoryValue = array();
		$listCategoryText = array();
		//initial category option
		$listCategoryText[] = "--Choise--";
		$listCategoryValue[] = 0;
		foreach($listCategory as $row)
		{
			$listCategoryText[] = $row['menuName'];
			$listCategoryValue[] = $row['idMenu'];	
			
		}
		$view->assign('LIST_CATGORY_TEXT', $listCategoryText);
		$view->assign('LIST_CATGORY_VALUE', $listCategoryValue);
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = 'backend/' . $language_abbr . '/';
		else
			$middle = 'backend/';
		$urlPost = $this->url("menu/getcategorylist");
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','add_menu.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('MENU_NAME',$this->lang->line('MENU_NAME'),true);
		$view->assign('MENU_LINK',$this->lang->line('MENU_LINK'),true);
		$view->assign('MENU_STATUS',$this->lang->line('MENU_STATUS'),true);
		$view->assign('MENU_TAB',$this->lang->line('MENU_TAB'),true);
		$view->assign('SELECT_STATUS_TITLE',$this->lang->line('SELECT_STATUS_TITLE'),true);
		$view->assign('ACTIVE_TITLE',$this->lang->line('ACTIVE_TITLE'),true);
		$view->assign('UNACTIVE_TITLE',$this->lang->line('UNACTIVE_TITLE'),true);
		$view->assign('MENU_PARENT',$this->lang->line('MENU_PARENT'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('MENU_INFO_TITLE',$this->lang->line('MENU_INFO_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('SCRIPT_PREVIEW',$scriptJs,true);
		$view->assign('SHOW_LIST_ARTICLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('TRANSLATE_STATUS',$translateStatus,true);
		$view->assign('LANGUAGE_TRANSLATE',$langTranslate,true);
		$view->assign('IMPORT_TITLE',$this->lang->line("IMPORT_TITLE"),true);
		$view->display('index.tpl');
	}
	
	public function save()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('category', $langCurrent);
		$this->load->model("Model_Menu");
		//validate form
		$this->load->helper(array('form', 'url'));
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$url = $this->input->post('url');
		$tab = $this->input->post("tab");
		$parentId = $this->input->post('parent');
		$status = $this->input->post('status');
		$lever = $this->input->post('lever');
		$fileName = $this->input->post('previewphoto');
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
			redirect( $this->url('menu/add/'.$idString));
		}
		$image="";
		if($fileName !="")
		{
			//load config image
			$imageThumbWidth=$this->config->item('product_thumb_width');
			$imageThumbHeight=$this->config->item('product_thumb_height');
			$imageThumbWidthX=$this->config->item('product_thumb_widthx');
			$imageThumbHeightX=$this->config->item('product_thumb_heightx');
			$this->load->library('upload',$this->imageConfig);
			if ( ! ($image=$this->upload->saveImage($imageThumbWidth,
			$imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX, $fileName)))
			{
				$message = $this->lang->line('ERROR_MESSAGE_UPLOAD');
				$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
				redirect($this->url('menu/add'));
			}else {
				$this->db->set('images', $image);
				
			}
			
		}
		
		if($id==0 || ($rid !=0 && $translateStatus ==1))
		{
			//get max rid
			$maxRID = $this->Model_Menu->getMaxRID();
			$this->db->set('menuName', $name);
			$this->db->set('idParent', $parentId);
			$this->db->set('status', $status);
			$this->db->set('tab', $tab);
			if($parentId!=0)
				$this->db->set('lever', $lever + 1);
			if($translateStatus == 1){
				if($image == '' && $imageLink !='')
					$this->db->set('images', $imageLink);
				$this->db->set('language', $langTranslate);
				$this->db->set('rid', $rid);
			}
			else{
				$this->db->set('language', $langCurrent);
				$this->db->set('rid', $maxRID + 1);			
			}	
			$dbRet = $this->db->insert('menus'); 
		}
		else
		{
			$this->db->set('menuName', $name);
			$this->db->set('idParent', $parentId);
			$this->db->set('tab', $tab);
			$this->db->set('status', $status);
			$this->db->set('url', $url);
			$this->db->set('language', $langCurrent);
			$this->db->where('idMenu', $id);
			if($parentId!=0)
				$this->db->set('lever', $lever + 1);
			$dbRet = $this->db->update('menus');  
			
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
		redirect($this->url('menu/'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('menu', $lang);
		$id=$this->input->post('id');
		if(empty($id))
		{
			$lang = $this->uri->segment(1);	
			if(isset($lang) && strlen($lang) == 2)
				$id=$this->uri->segment(5);
			else 
				$id=$this->uri->segment(4);
			$this->db->where('idMenu', $id);
		}else
		{
			$this->db->where_in('idMenu', $id);
		}
		//check category exist category child or no
		$this->load->model('Model_Menu');
		if(is_array($id)) {
			foreach($id as $item) {
				if($this->Model_Menu->isExistMenuChild($item))
				{
					$message = $this->lang->line('EXIST_MENU_CHILD');
					$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
					redirect($this->url('menu/'));
					
					
				}
				else 
				{
					
					@$this->db->delete('menus');
					$message = $this->lang->line('SAVE_DATA_SUCCESS');
					$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
					redirect($this->url('menu/'));
				}
			}
		}else {
			if($this->Model_Menu->isExistMenuChild($id))
			{
				$message = $this->lang->line('EXIST_MENU_CHILD');
				$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
				redirect($this->url('menu/'));
				
				
			}
			else 
			{
				@$this->db->delete('menus');
				$message = $this->lang->line('SAVE_DATA_SUCCESS');
				$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
				redirect($this->url('menu/'));
			}
		}
		
		
	}
	/**
	 * todo: update order
	 */
	function updateorder(){
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('category', $lang);
		//get order array
		$numItem = $this->input->post('number_row');
		$arrayId = $this->input->post('orderid');
		foreach($arrayId as $item) {
			$cate = $this->input->post("$item");
			$this->db->set('tab', $cate);
			$this->db->where('idMenu', $item);
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