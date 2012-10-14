<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_Service extends CI_Controller 
{
	
	public function __construct ()
    {
    	parent::__construct();
    
    }
    public function helloworld()
    {
		
    	$this->load->model("Model_Users");
    	$userInfo = $this->Model_Users->getUserById(34);
    	return $userInfo;	
    	
    }	
}
?>