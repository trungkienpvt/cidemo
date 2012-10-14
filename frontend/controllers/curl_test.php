<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Curl_Test extends Front_Controller {

	public function __construct ()
    {
    	parent::__construct();
    	$this->load->helper('url');
    }
	public function index()
	{
		$this->load->library('mtemplate');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','curl.tpl',true);
		if(isset($_FILES['userfile']))
		{
			
			try
			{
				$fileName = $_FILES['userfile']['name'];
			    $file = $_FILES ['userfile'] ['tmp_name'];
				$ch = curl_init ( 'http://localhost/ciapp/albums/save' );
				curl_setopt ( $ch, CURLOPT_POSTFIELDS,array('title'=>'new photo', "status" =>'1',"userfile" =>"@$file", 'filename' =>$fileName ) );
				curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
				$postResult = curl_exec ( $ch );
				curl_close ( $ch );
				print "$postResult";
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			
			}
		}
		else
		{
//			die("vao day");
		}
		$view->display('index.tpl');
	}
	
}

