<?php
require_once (APPPATH . 'libraries/front_controller.php');
class test extends Front_Controller {
	public function __construct() {
		parent::__construct ();
	}
	
	public function index() {
		$progress = $this->uri->segment ( 3 );
		
		$this->load->library ( "Zend" );
		$this->load->library ( "MyProgressBar" );
		$this->load->view ( 'progressbar.php', array ("progress" => $progress, "imagePath" => $this->config->item ( 'themes_image' ), 'basePath' => $this->config->item ( 'base_url' ), 'index_page' => $this->config->item ( 'index_page' ) ) );
	
	}
	public function sendmail() {
		$this->load->library ( 'Zend' );
		$this->load->library ( 'My_Mail' );
		try {
			$tr = new Zend_Mail_Transport_Smtp ( 'smtp.gmail.com', array ('auth' => 'login', 'username' => 'phantrungkienvt@gmail.com', 'password' => 'googletk11', 'ssl' => 'ssl', 'port' => 465 ) );
			Zend_Mail::setDefaultTransport ( $tr );
			$mail = new Zend_Mail ( 'UTF-8' );
			$mail->setBodyHtml ( 'abc' );
			$mail->addTo ( 'tkfunnyvt@yahoo.com' );
			$mail->setSubject ( 'test send mail by zend mail' );
			$mail->setFrom ( 'phantrungkienvt@gmail.com' );
			$mail->send ();
			print ("Send mail successfull") ;
			exit ();
		} catch ( Exception $e ) {
			print $e->getMessage ();
			exit ();
		}
	}
	public function export_image() {
//		$config ['source_image'] = PATH_ROOT.  '/data/images/' . 'chau-tu-na-9.jpg';
//		$config ['wm_text'] = 'Copyright 2006 - John Doe';
//		$config ['wm_type'] = 'text';
//		$config ['wm_font_path'] = PATH_ROOT . '/system/fonts/texb.ttf';
//		$config ['wm_font_size'] = '10';
//		$config ['wm_font_color'] = 'cccccc';
//		$config ['wm_vrt_alignment'] = 'middle';
//		$config ['wm_hor_alignment'] = 'center';
//		$config ['wm_padding'] = '0';
//		$config ['wm_hor_offset'] = '50px';
//		$config ['wm_vrt_offset'] = '10px';
//		$this->load->library("image_lib",$config);
////		$this->image_lib->initialize ( $config );
//		
//		$this->image_lib->watermark ();
		 $this->load->view('test', array());
		
	}

}

