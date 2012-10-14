<?php
/**
 * @date			April 11, 2011
 *
 */
class Soap_Server extends CI_Controller
{
	public $class;
	public $authentication;
	public function __construct ()
    {
    	parent::__construct();
    	$this->load->library('Zend');
    	$this->load->library('My_Service');
    	$this->load->library('Soap_Service');
    	$class = $this->uri->segment(4);
    	$this->serverLink = "http://" . $_SERVER['HTTP_HOST'] . '/' . 'soap_server/index/';
    	if($class!="")
    		$this->class = $class;
    	else
	    	$this->class ="My_Service";
	    $keyConfig = $this->config->item("key_service");
	    $keyConfig = md5($keyConfig);
	    $key = $this->uri->segment(6);
	    $key = md5($key);
	    if($key!=$keyConfig)	
	    	$this->authentication = false;
	   	else
	   		$this->authentication = true;
    	
    }
    
	public function index ()
    {
    	if($this->authentication) {
	        if (isset($_GET['wsdl'])) 
	        {
	        	ini_set("soap.wsdl_cache_enabled", "0");
	        	$service = new Soap_Service();
	        	$service->getSoapServer($this->class, true, $this->serverLink);
	            
	        } 
	        else 
	        {
	        	ini_set("soap.wsdl_cache_enabled", "0");
	        	$service = new Soap_Service();
	            $service->getSoapServer($this->class, false, $this->serverLink);
	            
	        }
    	}else {
    		return false;
    	}
    	
    }
    
    
}