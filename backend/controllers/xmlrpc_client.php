<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Xmlrpc_client extends Base_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->library('xmlrpc');
		$this->load->library('xmlrpcs');
	
	}
	function index()
	{

//		$this->xmlrpc->debug = true;
		$server_url = site_url('xmlrpc_server');
		$this->xmlrpc->server($server_url, 80);
		$this->xmlrpc->method('helloworld');
		$request = array('How is it going?');
		$this->xmlrpc->request($request);
		if ( ! $this->xmlrpc->send_request())
		{
			echo $this->xmlrpc->display_error();
		}
		else
		{
			echo '<pre>';
			print_r($this->xmlrpc->display_response());
			echo '</pre>';
		}
	
	}

}

