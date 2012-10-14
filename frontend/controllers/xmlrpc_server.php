<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Xmlrpc_server extends CI_Controller 
{

	public $builtInMethods;
	function index()
	{
		$this->load->library('xmlrpc');
		$this->load->library('xmlrpcs');
		$config['functions']['getuser'] = array('function' => 'Xmlrpc_server.getuser');
		$this->xmlrpcs->initialize($config);
		$this->xmlrpcs->serve();
	}
	function getuser($request)
	{
					
		$parameters = $request->output_parameters();
		$this->load->model("Model_Users");
		$userResult = $this->Model_Users->getUser("username",'phan');
		$response = array($userResult,	'struct');
		return $this->xmlrpc->send_response($response);
	}
	
}
