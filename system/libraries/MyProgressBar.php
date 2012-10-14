<?php
class MyProgressBar 
{
    public function __construct()
    {
	    require_once 'Zend/Loader.php';
		Zend_Loader::loadClass('Zend_ProgressBar');
		Zend_Loader::loadClass('Zend_ProgressBar_Adapter_JsPush');
    }
    //return soap server object
	
}