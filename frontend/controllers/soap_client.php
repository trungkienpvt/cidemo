<?php
/**
 * @date			April 11, 2011
 *
 */
require_once(APPPATH.'libraries/front_controller.php');
class Soap_Client extends CI_Controller
{
   	public $serverLink;
	public function __construct ()
    {
    	parent::__construct();
    	$this->load->library('Zend');
    	$this->load->library('Soap_Service');
    	if($this->config->item("index_page")!="")
    		$this->serverLink = $this->config->item('base_url') . $this->config->item("index_page") . '/' . 'soap_server/index';
    	else
    		$this->serverLink = $this->config->item('base_url') . 'soap_server/index';
    }
    
    public function getuserinfo()
    {
//    	die($this->serverLink);
		ini_set("soap.wsdl_cache_enabled", "0");
		$class = "My_Service";
		$uri = $this->serverLink . '/class/' . $class . '/' . 'key' . '/' . "123456" ;
//		die($uri);
    	$options = array('location' => $uri, 'uri' => $uri);
    	$service = new Soap_Service();
        $client = $service->getSoapClient($options);
        $result = $client->helloworld();
        Zend_Debug::dump($result);
    	exit;
    }

    
    
}