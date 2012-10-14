<?php
class Soap_Service 
{
    protected $soapClient;
    protected $soapServer;
    public function __construct()
    {
    
	    require_once 'Zend/Loader.php';
	    Zend_Loader::loadClass('Zend_Debug');
//		Zend_Loader::loadClass('Zend_Http_Client');
    }
    //return soap server object
	public function getSoapServer($class, $wsdl = false, $link = '')
	{
		
		if($wsdl == true)
		{
			try
			{
				Zend_Loader::loadClass('Zend_Soap_AutoDiscover');
				$server = new Zend_Soap_AutoDiscover();
				$server->setClass($class);
				$server->handle();
			}
			catch(exception $e)
			{
				echo $e->getMessage();
			}
			
		}
		else
		{
			ini_set("soap.wsdl_cache_enabled", "0");
			Zend_Loader::loadClass('Zend_Soap_Server');
			$server = new Zend_Soap_Server(null,array('uri' =>$link));
			$server->setClass($class);
			$server->handle();
		}
	}
	//return soap client object
	public function getSoapClient($link)
	{
		Zend_Loader::loadClass('Zend_Soap_Client');
		$wsdl = $link;
		$client = new Zend_Soap_Client(null,$wsdl);
		$this->soapClient = $client;
		return $client;
		
	}

}