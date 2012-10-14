<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
class Front_Controller extends CI_Controller
{
	
	public $imageConfig=array();
	public function getImageConfig()
	{
		$this->imageConfig['upload_path'] = './data/images/';
//		$config['upload_path'] = './data/files/';
		$this->imageConfig['allowed_types'] = 'gif|jpg|png';
//		$config['allowed_types'] = '*';
		$this->imageConfig['max_size']	= '10000';
		$this->imageConfig['max_width']  = '2024';
		$this->imageConfig['max_height']  = '2068';
	}
    public function __construct ()
    {
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('session');
    	
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
    function getSessionError()
    {
    	$errorFlag=$this->session->userdata('error_flag');
    	$messageArray=array();
    	if($errorFlag)
    	{
    		$messageArray=array('error_message' => $this->session->userdata('error_message'), 
    		'message_type' => $this->session->userdata('message_type')
    		);
    	}
		else
			$messageArray=array('error_message' => '', 
    		'message_type' => ''
    		);
		//reset session error	
		$this->session->set_userdata(array(
                'error_message' => "",'error_flag'=>false, 'message_type' =>''));
		return $messageArray;	
    }
}