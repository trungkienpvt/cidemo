<?php
if (! defined('BASEPATH'))    exit('No direct script access allowed');
class Base_Controller extends CI_Controller
{
	
	public $imageConfig=array();
	public function getImageConfig()
	{

		
		$this->imageConfig['upload_path'] = PATH_ROOT2 . DS . 'data' . DS . 'images' . DS;
		$this->imageConfig['upload_path_tmp'] = PATH_ROOT2 . DS . 'data' . DS . 'tmp' . DS;
//		$config['upload_path'] = './data/files/';
		$this->imageConfig['allowed_types'] = 'gif|jpg|png';
//		$config['allowed_types'] = '*';
		$this->imageConfig['max_size']	= '2097152';
		$this->imageConfig['max_width']  = '';
		$this->imageConfig['max_height']  = '';
	}
	public function __construct ()
    {
    	parent::__construct();
    	global $URI, $CFG;
//    	die(PATH_ROOT);	
    	$pathUpload = preg_replace("|(.+)backend|iUs", "$1$2", PATH_ROOT);
    	define('PATH_ROOT2', $pathUpload);
    	$this->load->helper('url');
    	$this->load->library('session');
    	$this->load->library('form_validation');
    	$this->load->library('Zend');
    	$this->load->library("ZAcl");
    	$messageContent = $this->session->flashdata('message_content');
    	$messageType = $this->session->flashdata('message_type');
    	if(isset($messageContent) && $messageContent !='') 
    	{
    		$CFG->config['message_content'] = $messageContent;
    		$CFG->config['message_type'] = $messageType;
    	}
    	$username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->getImageConfig();
        if(!$this->check_login())
        {
        	if(!empty($_POST))
        	{
        		$config =& $CFG->config;
		        $default_abbr  = $config['language_abbr'];
		        $lang_uri_abbr = $config['lang_uri_abbr'];
        		$this->session->set_userdata(array('language_abbr' =>$default_abbr ));
        		$this->session->set_userdata(array('language' =>$lang_uri_abbr[$default_abbr] ));
        		$this->submitlogin($username,$password);
        	}
        	else
        	{
        		$this->baseLogin();
        	}			
        }
//	    check language key
    	
		$config =& $CFG->config;
        $default_abbr  = $config['language_abbr'];
        $lang_uri_abbr = $config['lang_uri_abbr'];
        /* get the language abbreviation from uri */
        $uri_abbr = $URI->segment(1);
        /* remove the invalid abbreviation */
        $URI->uri_string = preg_replace("|^\/?$uri_abbr\/?|", '', $URI->uri_string);
        if(strlen($uri_abbr) == 2 && isset($lang_uri_abbr[$uri_abbr]))
        {
        	$config['current_language'] = TRUE;
	        /* set the language_abbreviation cookie */
        	$this->session->set_userdata(array('language_abbr' =>$uri_abbr ));
        	$this->session->set_userdata(array('language' =>$lang_uri_abbr[$uri_abbr] ));
	    }
	    else
	    {
	    	$this->session->set_userdata(array('language_abbr' =>$default_abbr ));
        	$this->session->set_userdata(array('language' =>$lang_uri_abbr[$default_abbr] ));
	    }
//	    die($this->session->userdata("language"));
	    $this->lang->load('block', $this->session->userdata("language"));
     }
    public function configMail()
    {
    	$config = array(
    		'protocol' => $this->config->item('protocol'),
			'smtp_host' => $this->config->item('smtp_host'),
			'smtp_port' => $this->config->item('smtp_port'),
			'smtp_user' => $this->config->item('smtp_user'),
			'smtp_pass' => $this->config->item('smtp_pass')
    	);
    	return $config;
    	
    } 
    function check_login ()
    {
    	if (! $this->is_logined()) {
        	return false;
        }else
        {
        	return true;
        }
	    }
    function is_logined ()
    {
        return $this->session->userdata('login_id');
    }
    function baseLogin ()
    {
    	$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('users', $langCurrent);
        $data = array();
        $this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
        $this->load->library('myutility');
        $convertVN = new MyUtility();
        $title_page = '';
        $preData = $this->mtemplate->getData();
		$data = array();
		$data['PREDATA'] = $preData;
		$data['title_page'] = "User Login";
		$view =$this->load->view("templates/" . $this->mtemplate->_template . "/login",$data,true);
		echo $view;exit;
    }
    function submitlogin($userName,$password)
    {
        $langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('users', $langCurrent);
    	//validate form
    	$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$message=validation_errors();
			$message = str_replace("<p>","",$message);
			$message = str_replace("/p","br/",$message);
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
			redirect( $this->url('users/login/'));
		}
		
	    $this->load->model('Model_Users');
        $loginResult = $this->Model_Users->login($userName, $password);
        if (!empty($loginResult)) {
            $this->session->set_userdata(array(
                'login_id' => true, 'user_role' =>$loginResult['user_role']));
            redirect( $this->url('users/'));
        } else {
            $message= $this->lang->line("USERNAME OR PASSWORD INVALID");
			$message = str_replace("<p>","",$message);
			$message = str_replace("/p","br/",$message);
			$this->session->set_flashdata(array('message_content' =>$message,'message_type' =>"error"));
            redirect( $this->url('users/'));
        }
    }
    function url($param)
    {
    	global $URI, $CFG, $IN;
    	$config =& $CFG->config;
        $index_page    = $config['index_page'];
        $baseUrl = $config['base_url'];
        $default_abbr  = $config['language_abbr'];
        $lang_uri_abbr = $config['lang_uri_abbr'];
		$lang = $this->session->userdata('language_abbr');
    	if(isset($lang) && $lang !=  $default_abbr) {
    		if(!empty($index_page))	
    			return $baseUrl . 'backend/' . $index_page . '/' . $lang . '/' . $param;
    		else 
    			return $baseUrl . 'backend/' .  $lang . '/' . $param;
    	}else {
    		if(!empty($index_page))	
    			return $baseUrl . 'backend/' . $index_page . '/'. $param;
    		else 
    			return $baseUrl . 'backend/' . $param;
    	
    	}
    }
	public function _previewphoto() {
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