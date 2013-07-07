<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Contacts extends Front_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'emailfrom',
                     'label'   => 'From',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'emailto',
                     'label'   => 'To',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'subject',
                     'label'   => 'Subject',
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'message',
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
	
	public function sendmail()
	{
	
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('contact', $lang);
		$this->load->library('Zend');
    	$this->load->library('My_Mail');
		//check captcha
		$captchaNew = $this->input->post('captcha');
		$captchaOld = $this->session->userdata('captcha_word');
		$from = $this->input->post('emailfrom');
		$to = $this->input->post('emailto');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$mailHost       =	$this->config->item('smtp_host');
		$mailUsername   = $this->config->item('smtp_user');     
		$mailPassword   = $this->config->item('smtp_pass');
		$mailPort =   $this->config->item('smtp_port');
		//check validate form
		if($this->form_validates() == FALSE)
		{
			$message=validation_errors();
			$arrMessage['emailfrom'] = form_error('emailfrom');
			$arrMessage['emailto'] = form_error('emailto');
			$arrMessage['subject'] = form_error('subject');
			$arrMessage['message'] = form_error('message');
			$message = str_replace ( "<p>", "", $message );
			$message = str_replace ( "/p", "br/", $message );
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error", 'array_error_message'=>$arrMessage));
			redirect($this->url('contacts/index'));
			
		}
		if($captchaNew != $captchaOld)
		{
			$message = $this->lang->line('CAPTCHA_INVALID');
			$this->session->set_flashdata(array("message_content" =>$message, "message_type" =>"error"));
			redirect($this->url('contacts/index'));
		}
		
		try
    	{
     		$tr = new Zend_Mail_Transport_Smtp ( $mailHost, array ('auth' => 'login', 'username' => $mailUsername, 'password' => $mailPassword, 'ssl' => 'ssl', 'port' => $mailPort ) );
	        Zend_Mail::setDefaultTransport ( $tr );
	        $mail = new Zend_Mail ( 'UTF-8' );
	        $mail->setBodyHtml ( $message );
	        $mail->addTo ( $to );
	        $mail->setSubject ( $subject );
	        $mail->setFrom ( $from);
	        $mail->send ();
         	$messageArray = array("message" =>$this->lang->line('SEND_MAIL_SUCCESS'), "type" =>"warning");
    	}catch(Exception $e){
    		$messageArray = array("message" =>$this->lang->line('SEND_MAIL_FALSE'), "type" =>"error");
    	}
		$this->session->set_flashdata(array("message_content" =>$messageArray['message'], "message_type" =>$messageArray['type']));
		redirect($this->url('contacts/index'));
		
	}
	public function index()
	{
		$captchaWord = $this->session->userdata('captcha_word');
		$langCurent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->load->helper('form');
		$this->lang->load('contact', $langCurent);
		$this->load->library('ckeditor'); 
		$this->load->library('ckfinder');
		$base_url=$this->config->item('base_url');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		//generate breadcrumb
		$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$this->breadcrumb->append_crumb('Contact Us', site_url('/') . $middle . "contacts");
		$breadCrumb = $this->breadcrumb->output();
		//generate text area
		$editor= new ckeditor ();
		$content_value = $editor->editor('message','');
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurent));
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$preData = $this->mtemplate->getData();
		$data= array();
		$data['BREAD_CRUMB'] = $breadCrumb;
		$data['PAGINATION_STRING'] = $this->pagination->create_links();
		$data['PREDATA'] = $preData;
		$data['PAGE_TITLE'] = $this->lang->line('PRODUCT_LIST');
		$data['TITLE_TITLE'] = $this->lang->line('TITLE_TITLE');
		$data['CLICK_TO_FULL_IMAGE'] = $this->lang->line('CLICK_TO_FULL_IMAGE');
		$data['LANGUAGE_ABBR'] = $this->lang->line('middle');
		$data['layout_content']= $this->load->view("templates/" . $this->mtemplate->_template . "/contact", 
		$data, true);
		$this->load->view("templates/" . $this->mtemplate->_template . "/index",$data);
	}	
			
}

