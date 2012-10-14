<?php
class Model_Vimeo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function curl_get($url) {
		$curl = curl_init($url);
//		$curl = $url;
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		$return = curl_exec($curl);
		curl_close($curl);
		return $return;
	}
    
}
