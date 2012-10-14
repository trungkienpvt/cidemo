<?php

class My_Mail 
{
 	public function __construct()
    {
    
	    require_once 'Zend/Loader.php';
	    Zend_Loader::loadClass('Zend_Exception');
	    Zend_Loader::loadClass('Zend_Mail_Exception');
	    Zend_Loader::loadClass('Zend_Mail_Protocol_Exception');
		Zend_Loader::loadClass('Zend_Mail_Transport_Smtp');
		Zend_Loader::loadClass('Zend_Mail');

    }
}

?>