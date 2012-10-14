<?php
class Soap_Cliente 
{
    protected $soapClient;
    protected $soapServer;
    public function __construct($arrData)
    {
    
	    require_once 'Zend/Loader.php';
		Zend_Loader::loadClass('Zend_Http_Client');
    }
    //return soap server object
	public function getSoapServer($class, $link)
	{
		
		if($_SERVER['QUERY_STRING'] == 'wsdl')
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
			Zend_Loader::loadClass('Zend_Soap_Server');
			$server = new Zend_Soap_Server($link);
			$server->setClass($class);
			$server->handle();
		}
	}
	//return soap client object
	public function getSoapClient($link)
	{
		Zend_Loader::loadClass('Zend_Soap_Client');
		$wsdl = $link;
		$client = new Zend_Soap_Client($wsdl);
		$this->soapClient = $client;
		return $client;
		
	}

}