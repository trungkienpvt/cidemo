<?php 
class MyExample extends CI_Model{
	var $title   = '';
	var $content = '';
	var $date    = '';
	function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }
	
	function getHello(){
		return "Hello world";
	}
}

?>