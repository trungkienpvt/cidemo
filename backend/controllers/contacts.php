<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Contacts extends Base_Controller {
	public function form_validates()	
	{
		$config = array();
		
		$config = array(
               array(
                     'field'   => 'emailfrom',
                     'label'   => 'Email from',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'emailto',
                     'label'   => 'Email to',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'subject',
                     'label'   => 'Subject',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'message',
                     'label'   => 'Message',
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
		$this->load->library('Phpmailer');//print_r($mailConfig);exit;
		$this->load->helper('myutility');
		//check captcha
		$captchaNew = $this->input->post('captcha');
		$captchaOld = $this->session->userdata('captcha_word');
		$mailHost       =	$this->config->item('smtp_host');
		$mailUsername   = $this->config->item('smtp_user');     
		$mailPassword   = $this->config->item('smtp_pass');
		$mailPort =   $this->config->item('smtp_port');
		
		//check validate form
		if($this->form_validates() == FALSE)
		{
			$message=validation_errors();
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
			redirect($this->url('contacts/index'));
			
		}
		if($captchaNew != $captchaOld)
		{
			$message = $this->lang->line('CAPTCHA_INVALID');
			$this->session->set_flashdata(array("message_content" =>$message, "message_type" =>"error"));
			redirect($this->url('contacts/index'));
		}
		$from = $this->input->post('emailfrom');
		$to = $this->input->post('emailto');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$this->load->library('Zend');
    	$this->load->library('My_Mail');
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
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('contact', $lang);
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$lang));
		$this->load->library('ckeditor'); 
		$this->load->library('ckfinder');
		$base_url=$this->config->item('base_url');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$editor= new ckeditor ();
		$content_value = $editor->editor('message','');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','contact.tpl',true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('EMAIL_FROM_TITLE',$this->lang->line('EMAIL_FROM_TITLE'),true);
		$view->assign('EMAIL_TO_TITLE',$this->lang->line('EMAIL_TO_TITLE'),true);
		$view->assign('MESSAGE_TITLE',$this->lang->line('MESSAGE_TITLE'),true);
		$view->assign('MESSAGE_DATA',$content_value,true);
		$view->assign('CONTACT_INFO_TITLE',$this->lang->line('CONTACT_INFO_TITLE'),true);
		$view->assign('SUBMIT_TITLE',$this->lang->line('SUBMIT_TITLE'),true);
		$view->assign('SUBJECT_TITLE',$this->lang->line('SUBJECT_TITLE'),true);
		$view->assign('CAPTCHA_TITLE',$this->lang->line('CAPTCHA_TITLE'),true);
		$view->display('index.tpl');
	}	
	

	
		
}

