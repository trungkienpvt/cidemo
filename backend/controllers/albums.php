<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Albums extends Base_Controller {
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
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('albums', $langCurrent);
		$base_url=$this->config->item('base_url');
		$limitPerPage=$this->config->item('limit_of_page');
		$this->load->model('Model_Albums');
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
		$where = array();
		$config['base_url'] =  $this->url("albums/index" . "/page");
		$config['total_rows'] = $this->Model_Albums->getNumItem($where);
//		$config['total_rows'] = 10;
		$config['per_page'] = $limitPerPage;
		
		$albumList=$this->Model_Albums->getList('*',$page,$limitPerPage, $where);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->load->library('myutility3');
		$title_page=$this->lang->line('TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','index_album.tpl',true);
		$view->assign('ALBUM_LIST',$albumList,true);
		//Load language key
		$view->assign('ALBUM_TITLE',$this->lang->line('ALBUM_TITLE'),true);
		$view->assign('ALBUM_LINK',$this->lang->line('LINK'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('EDIT_TITLE',$this->lang->line('EDIT_TITLE'),true);
		$view->assign('DELETE_TITLE',$this->lang->line('DELETE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('ALBUM_TITLE_PAGE'),true);
		$view->assign('STATUS_TITLE',$this->lang->line('STATUS_TITLE'),true);
		$view->assign('CATEGORY_TITLE',$this->lang->line('CATEGORY_TITLE'),true);
		//pagination
		$this->load->library('pagination');
		$this->pagination->initialize($config);
//		echo $this->pagination->create_links();exit;
		$view->assign('PAGINATION_STRING',$this->pagination->create_links(),true);
		$view->assign('URL_ADD_ITEM',$this->url("albums/add"),true);
		$view->assign('NUM_ROW',count($albumList),true);
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
		$this->lang->load('albums', $lang);
		$base_url=$this->config->item('base_url');
		$this->load->model('Model_Category_Album');
		$this->load->model('Model_Albums');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$this->load->library('myutility3');
		$view=$this->mtemplate->preView();
		//check edit or add action
		$lang = $this->uri->segment(1);
		if(isset($lang) && strlen($lang) == 2)
			$id=$this->uri->segment(5);
		else 
			$id=$this->uri->segment(4);
		//check edit or add action
		if(!empty($id))
		{
			$albumInfo=$this->Model_Albums->getItemById($id);
//			print_r($albumInfo);exit;
			if(!empty($albumInfo))
			{
				$view->assign('EDIT_FLAG',1,true);
				$view->assign('ALBUM_DATA',$albumInfo,true);
				$view->assign('MY_SELECT',$albumInfo['category'],true);
			}
			else
			{
				$view->assign('EDIT_FLAG',0,true);
				$view->assign('ALBUM_DATA',0,true);
				$view->assign('MY_SELECT',0,true);
			}
			
		}
		else
		{
			$view->assign('ALBUM_DATA',0,true);
			$view->assign('EDIT_FLAG',0,true);
			$view->assign('MY_SELECT',0,true);
			
		}
		$where2 = array();
		$listCategory = $this->Model_Category_Album->getList('idCategory,catName',0,0,$where2);
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
		
		//generate js preview
		$scriptJs ='<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "' . $this->mtemplate->baseUrl . 'albums/previewphoto/",
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
		
		
//		echo($scriptJs);exit;
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','add_albums.tpl',true);
		//Load language key
		$view->assign('TITLE_PAGE',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('LINK',$this->lang->line('LINK'),true);
		$view->assign('SELECT_STATUS_TITLE',$this->lang->line('SELECT_STATUS_TITLE'),true);
		$view->assign('ACTIVE_TITLE',$this->lang->line('ACTIVE_TITLE'),true);
		$view->assign('UNACTIVE_TITLE',$this->lang->line('UNACTIVE_TITLE'),true);
		$view->assign('UPLOAD_TITLE',$this->lang->line('UPLOAD_TITLE'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('ALBUM_INFO_TITLE',$this->lang->line('ALBUM_INFO_TITLE'),true);
		$view->assign('ALBUM_TITLE',$this->lang->line('ALBUM_TITLE'),true);
		$view->assign('CATEGORY_TITLE',$this->lang->line('CATEGORY_TITLE'),true);
		$view->assign('SCRIPT_PREVIEW',$scriptJs,true);
		
		$view->display('index.tpl');
	}
	public function save()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('albums', $lang);
		//validate form
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
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
			redirect( $this->url('albums/add/'.$idString));
		}
		$this->lang->load('users', 'english');
		$title=$this->input->post('title');
		$link=$this->input->post('link');
		$status=$this->input->post('status');
		$category=$this->input->post('category');
		if($fileName =="")
		{
			$image='NULL';
		}
		else 
		{
			//load config image
			$imageThumbWidth=$this->config->item('album_thumb_width');
			$imageThumbHeight=$this->config->item('album_thumb_height');
			$imageThumbWidthX=$this->config->item('album_thumb_widthx');
			$imageThumbHeightX=$this->config->item('album_thumb_heightx');
			$this->load->library('upload',$this->imageConfig);
			$image="";
			if ( ! ($image=$this->upload->saveImage($imageThumbWidth,
			$imageThumbHeight, $imageThumbWidthX, $imageThumbHeightX, $fileName)))
			{
				$message = $this->lang->line('ERROR_MESSAGE_UPLOAD');
				$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
				redirect($this->url('albums/add'));
			}
		}
		if($id==0)
		{
			$this->db->set('title', $title);
			$this->db->set('links', $link);
			$this->db->set('status', $status);
			$this->db->set('images', $image);
			$this->db->set('category', $category);
			$this->db->set('language', 'vietnamese');
			$dbRet = $this->db->insert('albums'); 
			
		}
		else
		{
			$this->db->set('title', $title);
			$this->db->set('links', $link);
			$this->db->set('status', $status);
			$this->db->set('category', $category);
			$this->db->set('language', 'vietnamese');
			if($image!="NULL")
			{
				$this->db->set('images', $image);
			}
			$this->db->where('id', $id);
			$dbRet = $this->db->update('albums');  
			
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
		redirect($this->url('albums/index'));
	}
	function delete()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('albums', $lang);
		$id=$this->input->post('id');
		$lang = $this->uri->segment(1);
		if(empty($id))
		{
			$lang = $this->uri->segment(1);	
			if(isset($lang) && strlen($lang) == 2)
				$id=$this->uri->segment(5);
			else 
				$id=$this->uri->segment(4);
			$this->db->where('id', $id);
		}
		else
		{
			$this->db->where_in('id', $id);
		}
		@$this->db->delete('albums');
		$message = $this->lang->line('SAVE_DATA_SUCCESS');
		$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"warning"));
		redirect($this->url('albums/index'));
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
