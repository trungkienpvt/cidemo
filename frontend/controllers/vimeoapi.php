<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Vimeoapi extends Front_Controller {

	public function __construct ()
    {
    	parent::__construct();
    	$this->load->helper('url');
    }
	public function index()
	{
		
		$this->lang->load('vimeoapi', 'english');
		$this->load->model('Model_Vimeo');
		// Change this to your username to load in your videos
		$vimeo_user_name = 'kienphan';
		// API endpoint
		$api_endpoint = 'http://vimeo.com/api/v2/' . $vimeo_user_name;
		// Load the user info and clips
		$userData = $this->Model_Vimeo->curl_get($api_endpoint . '/info.xml');
		$videoData = $this->Model_Vimeo->curl_get($api_endpoint . '/videos.xml');
		$this->load->library('mtemplate');
		$user = simplexml_load_string($userData);
		$videos = simplexml_load_string($videoData);
		$htmlContent = '
		<div id="stats">
		<img id="portrait" src="' . $user->user->portrait_small .'" />
		<h2>' . $user->user->display_name . '\'s Videos</h2>
	</div>
	<p id="bio">' . $user->user->bio .'</p>
	<div id="thumbs">
		<ul style="list-style:none">';
		foreach ($videos->video as $video)
		{
			$htmlContent .='<li>
				<a href="' . $video->url .'"><img src="' . $video->thumbnail_medium .'" /></a>
			</li>';
		}
		$htmlContent .='</ul></div>';
		$view=$this->mtemplate->preView();
		$view->assign('userData',$htmlContent,true);
		$view->assign('layout_content','vimeoapi.tpl',true);
		//Load language key
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('VIMEOAPI_TITLE',$this->lang->line('VIMEOAPI_TITLE'),true);
		$view->display('index.tpl');
	}
	public function playvideo()
	{
		$this->lang->load('vimeoapi', 'english');
		$this->load->model('Model_Vimeo');
		/*
		You may want to use oEmbed discovery instead of hard-coding the oEmbed endpoint.
		*/
		$oembed_endpoint = 'http://vimeo.com/api/oembed';
		// 	Grab the video url from the url, or use default
		$video_url = (isset($_GET['url'])) ? $_GET['url'] : 'http://vimeo.com/30887584';
		// Create the URLs
		$json_url = $oembed_endpoint . '.json?url=' . rawurlencode($video_url) . '&width=640';
		$xml_url = $oembed_endpoint . '.xml?url=' . rawurlencode($video_url) . '&width=640';
		// Load in the oEmbed XML
		$oembed = simplexml_load_string($this->Model_Vimeo->curl_get($xml_url));
		$htmlContent ='<h1>'.(isset($oembed->title)?$oembed->title:"") .'</h1>
    	<h2>by <a href="' . (isset($oembed->author_url)?$oembed->author_url:"") .'">
    	' . (isset($oembed->author_name)?$oembed->author_name:"") . '</a></h2>'.
    	(html_entity_decode($oembed->html)?html_entity_decode($oembed->html):"");
    	$this->load->library("mtemplate");
		$view=$this->mtemplate->preView();
		$view->assign('userData',$htmlContent,true);
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','playvimeo.tpl',true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('VIMEOAPI_TITLE',$this->lang->line('VIMEOAPI_TITLE'),true);
		$view->display('index.tpl');
	}
	public function getuserinfo()
	{
		$this->lang->load('vimeoapi', 'english');
		// Change this to your username to load in your videos
		$vimeo_user_name = 'kienphan';
		// API endpoint
		$xml = simplexml_load_file("http://vimeo.com/api/v2/kienphan/info.xml");
		$content = $xml->getName() . "<br />"; 
		$xmlChild=$xml->children();
		//$xmlChild=$xmlChild->children();
		foreach($xmlChild->children() as $child)
		{
		  $content .= $child->getName() . ": " . $child . "<br />";
		}
		$this->load->library('mtemplate');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','userinfo.tpl',true);
		$view->assign('contentData', $content, true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('VIMEOAPI_TITLE',$this->lang->line('VIMEOAPI_TITLE'),true);
		$view->display('index.tpl');
	}
	
}

