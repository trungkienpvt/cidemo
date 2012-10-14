<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Articles extends Base_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'title',
                     'label'   => 'Title',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'status',
                     'label'   => 'Status',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'content',
                     'label'   => 'Content',
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
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('article', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Article');
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
		$config['base_url'] = $this->url("articles/index" . "/page");
		$wheresTotal = array();
		$wheresTotal['article.language ='] = $langCurrent;
		$config['total_rows'] = $this->Model_Article->getNumItem($wheresTotal);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$wheres = array();
		$wheres['article.language ='] = $langCurrent; 
		$articleList=$this->Model_Article->getList('article.*,c.idCategory,c.catName',$page,$limitPerPage, $wheres);
		for( $i=0;$i<count($articleList);$i++)
		{
			$articleList[$i]['datetime'] = date('d/m/Y',$articleList[$i]['datetime']);
			$articleList[$i]['description'] = $articleList[$i]['description'];
			foreach($arrLang as $key=>$value){
				$rid = $articleList[$i]['rid'];
				$dataTMP = $this->Model_Article->getItemByRID($rid, $value);
				if(!empty($dataTMP))
					$articleList[$i][$value] = $dataTMP['idArticle'];
				else
					$articleList[$i][$value] = 0;
				
			}
			
		}
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('myutility3');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('layout_content','index_article.tpl',true);
		$view->assign('ARTICLE_LIST',$articleList,true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('ARTICLE_PAGE_TITLE',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('DESCRIPTION_TITLE',$this->lang->line('DESCRIPTION_TITLE'),true);
		$view->assign('CONTENT_TITLE',$this->lang->line('CONTENT_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('DATE_CREATE_TITLE',$this->lang->line('DATE_CREATE_TITLE'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('CATEGORY_TITLE',$this->lang->line('CATEGORY_TITLE'),true);
		$view->assign('ARR_LANG', $arrLang,true);
		$view->assign('COUNT_LANG', count($arrLang),true);
		$view->assign('TRANSLATED_STATUS', $this->lang->line('TRANSLATED_STATUS'),true);
		$view->assign('TRANSLATE_STATUS', $this->lang->line('TRANSLATE_STATUS'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('URL_ADD_ITEM',$this->url("article/add"),true);
		$view->assign('NUM_ROW',count($articleList),true);
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
		$this->lang->load('article', $langCurrent);
		$editor= new ckeditor ();
		$content_value = '';
		$this->load->model('Model_Article');
		$this->load->model('Model_Category_Article');
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
			$articleInfo=$this->Model_Article->getItemById($id);
//			print_r($articleInfo);exit;
			$editor->config['tabIndex'] = 4;
			if(!empty($articleInfo))
			{
				
				$content_value = $editor->editor('content',$articleInfo['content']);
				$view->assign('EDIT_FLAG',1,true);
				$view->assign('ARTICLE_DATA',$articleInfo,true);
				$view->assign('MY_SELECT',$articleInfo['idCategory'],true);
			}
			else
			{
				$content_value = $editor->editor('content');
				$view->assign('EDIT_FLAG',0,true);
				$view->assign('ARTICLE_DATA',0,true);
				$view->assign('MY_SELECT',0,true);
			}
			
		}
		else
		{
			$editor->config['tabIndex'] = 4;
			$content_value = $editor->editor('content');
			$view->assign('ARTICLE_DATA',0,true);
			$view->assign('EDIT_FLAG',0,true);
			$view->assign('MY_SELECT',0,true);
		}
		$scriptJs ='<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "' . $this->mtemplate->baseUrl . 'articles/previewphoto/",
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
		$listCategory = $this->Model_Category_Article->getList('idCategory,catName',0,0,$where);
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
		$view->assign('CATEGORY_TITLE', $this->lang->line('CATEGORY_TITLE'),true);
		//load fckeditor
		$view->assign('CONTENT_DATA',$content_value,true);
		$view->assign('title_page',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('layout_content','add_article.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('MANAGE_TITLE_PAGE'),true);
		$view->assign('LINK',$this->lang->line('LINK'),true);
		$view->assign('SELECT_STATUS_TITLE',$this->lang->line('SELECT_STATUS_TITLE'),true);
		$view->assign('ACTIVE_TITLE',$this->lang->line('ACTIVE_TITLE'),true);
		$view->assign('UNACTIVE_TITLE',$this->lang->line('UNACTIVE_TITLE'),true);
		$view->assign('UPLOAD_TITLE',$this->lang->line('UPLOAD_TITLE'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('ARTICLE_INFO_TITLE',$this->lang->line('ARTICLE_INFO_TITLE'),true);
		$view->assign('ARTICLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('DESCRIPTION_TITLE',$this->lang->line('DESCRIPTION_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('CONTENT_TITLE',$this->lang->line('CONTENT_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('INDEX_TITLE_PAGE'),true);
		$view->assign('LINK',$this->lang->line('LINK'),true);
		$view->assign('MESSAGE_SYSTEM',$this->session->flashdata('result'),true);
		$view->assign('SCRIPT_PREVIEW',$scriptJs,true);
		$view->assign('TRANSLATE_STATUS',$translateStatus,true);
		$view->assign('LANGUAGE_TRANSLATE',$langTranslate,true);
		$view->display('index.tpl');
	}
	public function save()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->load->model("Model_Article");
		$this->lang->load('article', $langCurrent);
		//validate form
		$this->load->helper(array('form', 'url'));
		$id=$this->input->post('id');
		$fileName = $this->input->post('previewphoto');
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$content=$this->input->post('content');
		$status=$this->input->post('status');
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
			redirect($this->url('articles/add/'.$idString));
		}
		$image="";
		if($fileName !="")
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
				redirect($this->url('articles/add'));
			}else {
				$this->db->set('image', $image);
			}
			
			
		}
		if($id==0 || ($rid !=0 && $translateStatus ==1))
		{
			//get max rid
			$maxRID = $this->Model_Article->getMaxRID();
			$this->db->set('title', $title);
			$this->db->set('description', $description);
			$this->db->set('content', $content);
			$this->db->set('status', $status);
			$this->db->set('datetime', time());
			$this->db->set('idCategory', $catId);
			if($translateStatus == 1){
				if($image == '' && $imageLink !='' )
					$this->db->set('image', $imageLink);
				$this->db->set('language', $langTranslate);
				$this->db->set('rid', $rid);
			}
			else{
				$this->db->set('language', $langCurrent);
				$this->db->set('rid', $maxRID + 1);			
			}
			$dbRet = $this->db->insert('article'); 
			
		}
		else
		{
			$this->db->set('title', $title);
			$this->db->set('description', $description);
			$this->db->set('content', $content);
			$this->db->set('status', $status);
			$this->db->set('datetime', time());
			$this->db->set('idCategory', $catId);
			$this->db->set('language', $langCurrent);
			$this->db->where('idArticle', $id);
			$dbRet = $this->db->update('article');  
			
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
		redirect($this->url('articles'));
	}
	function delete()
	{
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('article', $langCurrent);
		$id=$this->input->post('id');
		if(empty($id))
		{
			$lang = $this->uri->segment(1);	
			if(isset($lang) && strlen($lang) == 2)
				$id=$this->uri->segment(5);
			else 
				$id=$this->uri->segment(4);
			$this->db->where('idArticle', $id);
		}else
		{
			$this->db->where_in('idArticle', $id);
		}
		try {
			$this->db->delete('article');
			$message = $this->lang->line('SAVE_DATA_SUCCESS');
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
		}catch(Exception $e) {
		}
		redirect($this->url('articles'));
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
	 * todo: get list article
	 */

	public function loadlist() {
	
		$arrLang = $this->config->item('lang_uri_abbr');
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('article', $langCurrent);
		$limitPerPage=$this->config->item('limit_of_page');
//		die($this->config->item('error_message'));
		$this->load->model('Model_Article');
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
		$config['base_url'] = $this->url("articles/index" . "/page");
		$wheresTotal = array();
		$wheresTotal['article.language ='] = $langCurrent;
		$config['total_rows'] = $this->Model_Article->getNumItem($wheresTotal);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		$wheres = array();
		$wheres['article.language ='] = $langCurrent; 
		$this->load->library("StringUtility");
    	
    	$baseUrl = $this->config->item('base_url') . $this->config->item("index_page") . '/' . $language_abbr;
    	$data = array();
    	$data['base_url'] = $baseUrl;
    	$data['image_upload_link'] = $this->config->item('image_upload_link');
    	$data['data'] = $articleList=$this->Model_Article->getList('article.*,c.idCategory,c.catName',$page,$limitPerPage, $wheres);
    	$data['paging'] = $this->pagination->create_links();
    	$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
    	$this->load->view("templates/" . $this->mtemplate->_template. "/article-list", $data, false);
		
	}
}
