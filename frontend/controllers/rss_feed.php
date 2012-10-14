<?php
/**
 * @date			April 11, 2011
 *
 */
require_once(APPPATH.'libraries/front_controller.php');
class Rss_Feed extends CI_Controller
{
   	
	public function __construct ()
    {
    	parent::__construct();
    	$this->load->library('Zend');
    	$this->load->library('Rss');
    }
    
    public function index()
    {
	    //export rss feed content
		$this->load->model("Model_Users");
		$title = 'Latest feeds';
		$feedUri = '/rss/';
		//link from which feed is available
		$link = 'http://' . $_SERVER['HTTP_HOST'] . $feedUri;
		//create array according to structure defined in Zend_Feed documentation
		$feedArr = array('title' => $title,
		            'link'  => $link,
		            'description' => $title,
		            'language' => 'en-us',
		            'charset' => 'utf-8',
		             'image'     => 'url to image',  
		          //'published' => 1237281011,
		            'generator' => 'Zend Framework Zend_Feed',
		            'entries' => array()
		     );
		$itemObjs = $this->Model_Users->viewUser(0,20);
		foreach($itemObjs as $row) 
		{
			$obj = & $row;
			$feedArr['entries'][] = array(
			'title' => $obj['fullname'],
	        'link'    => 'http://' . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'],
	        'description' => $obj['username'],
	        'publishdate' => date('d-m-Y'),
	        'guid' => $_SERVER['REQUEST_URI'],
	        'image' => "ass"                                       
	            );
		}
		$rss = new Rss();
		$rss->sendRss($feedArr);
    	
	}
    
}