<?php

class My_Captcha 
{
 	public function __construct()
    {
    
	    require_once 'Zend/Loader.php';
	    Zend_Loader::loadClass('Zend_Exception');
		Zend_Loader::loadClass('Zend_Captcha_Image');
		Zend_Loader::loadClass('Zend_Captcha_Exception');
    }
    public function getCaptcha()
    {
    	$captcha=new Zend_Captcha_Image();
    	return $captcha;
		 
    
    }
}

?>