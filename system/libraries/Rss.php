<?php
class Rss 
{
    
    public function __construct()
    {
    
	    require_once 'Zend/Loader.php';
	    Zend_Loader::loadClass('Zend_Debug');
	    Zend_Loader::loadClass('Zend_Feed');
//		Zend_Loader::loadClass('Zend_Http_Client');
    }
    //return soap server object
	public function sendRss($feedArr)
	{
		$feed = Zend_Feed::importArray($feedArr, 'rss');
		$feed->send();
		
	}
	
}