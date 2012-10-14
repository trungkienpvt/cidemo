<?php
require_once(APPPATH.'libraries/front_controller.php');
class test extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
    }

    public function index()
    {
    	$progress = $this->uri->segment(3);
    	
    	$this->load->library("Zend");
    	$this->load->library("MyProgressBar");
		$this->load->view('progressbar.php',array("progress" =>$progress, "imagePath" => $this->config->item('themes_image'),'basePath'=> $this->config->item('base_url'),'index_page'=>$this->config->item('index_page')));
		
    }
    public function sendmail() {
    	$this->load->library('Zend');
    	$this->load->library('My_Mail');
    	try{
    	$tr = new Zend_Mail_Transport_Smtp ( 'smtp.gmail.com', array ('auth' => 'login', 'username' => 'phantrungkienvt@gmail.com', 'password' => 'googletk11', 'ssl' => 'ssl', 'port' => 465 ) );
         Zend_Mail::setDefaultTransport ( $tr );
         $mail = new Zend_Mail ( 'UTF-8' );
         $mail->setBodyHtml ( 'abc' );
         $mail->addTo ( 'tkfunnyvt@yahoo.com' );
         $mail->setSubject ( 'test send mail by zend mail' );
         $mail->setFrom ( 'phantrungkienvt@gmail.com');
         $mail->send ();
         print("Send mail successfull");exit;
    	}catch(Exception $e){
    		print $e->getMessage();
    		exit;
    	}
    }
}

