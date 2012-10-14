<?php

if (! defined('BASEPATH'))

    exit('No direct script access allowed');

class Front_Controller extends CI_Controller

{

	public $imageConfig=array();

	public function getImageConfig()

	{

		

		$this->imageConfig['upload_path'] = PATH_ROOT . DS . 'data' . DS . 'images' . DS;

		$this->imageConfig['upload_path_tmp'] = PATH_ROOT . DS . 'data' . DS . 'tmp' . DS;
//		$config['upload_path'] = './data/files/';

		$this->imageConfig['allowed_types'] = 'gif|jpg|png';

//		$config['allowed_types'] = '*';

		$this->imageConfig['max_size']	= '10000';

		$this->imageConfig['max_width']  = '2024';

		$this->imageConfig['max_height']  = '2068';

	}

    public function __construct ()

    {

    	parent::__construct();
    	global $URI, $CFG;
    	$this->load->helper('url');
    	$this->load->library('session');
    	$this->load->library('form_validation');
//		$this->output->enable_profiler(TRUE);	
    	$messageContent = $this->session->flashdata('message_content');

    	$messageType = $this->session->flashdata('message_type');

    	$config =& $CFG->config;

    	if(isset($messageContent) && $messageContent !='') 

    	{

    		$config['message_content'] = $messageContent;

    		$config['message_type'] = $messageType;

    	}
		$this->getImageConfig();
    	$default_abbr  = $config['language_abbr'];
        $lang_uri_abbr = $config['lang_uri_abbr'];
        /* get the language abbreviation from uri */
        $uri_abbr = $URI->segment(1);
        /* remove the invalid abbreviation */
        $URI->uri_string = preg_replace("|^\/?$uri_abbr\/?|", '', $URI->uri_string);
        if(strlen($uri_abbr) == 2 && isset($lang_uri_abbr[$uri_abbr]))
        {

        	$config['current_language'] = TRUE;

	        /* set the language_abbreviation cookie */

        	$this->session->set_userdata(array('language_abbr' =>$uri_abbr ));

        	$this->session->set_userdata(array('language' =>$lang_uri_abbr[$uri_abbr] ));

	    }

	    else

	    {

	    	$this->session->set_userdata(array('language_abbr' =>$default_abbr ));

        	$this->session->set_userdata(array('language' =>$lang_uri_abbr[$default_abbr] ));

	    }

    	//count items of cart

        $objCart = new CI_Cart();

        $cartData = $objCart->contents();

        $countItemCart = count($cartData);

        $config['count_cart'] = $countItemCart;

    	

     }

    public function configMail()

    {

    	$config = array(

    		'protocol' => $this->config->item('protocol'),

			'smtp_host' => $this->config->item('smtp_host'),

			'smtp_port' => $this->config->item('smtp_port'),

			'smtp_user' => $this->config->item('smtp_user'),

			'smtp_pass' => $this->config->item('smtp_pass')

    	);

    	return $config;

    	

    } 

	function url($param)

    {

    	global $URI, $CFG, $IN;

    	$config =& $CFG->config;

        $index_page    = $config['index_page'];

        $default_abbr  = $config['language_abbr'];

        $lang_uri_abbr = $config['lang_uri_abbr'];

		$lang = $this->session->userdata('language_abbr');

    	if(isset($lang) && $lang !=  $default_abbr)

 			return $lang . '/' . $param;

 		else   		

 			return $param;

    }

}