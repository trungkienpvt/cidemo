<?php
class ModelContact extends CI_Model{
	function __construct(){
		// Call the Model constructor
		$this->load->database();
		$library_path=$this->config->item('library_path');
		include_once("fckeditor/fckeditor.php") ;
		include_once($library_path."phpmailer.php");
		include_once($library_path."smtp.php");
		include_once($library_path."pop3.php");
		parent::__construct();
	}
	function viewContact()
	{
			
		//TRUY VAN DE LAY CAC CATEGORY
		$sql_4="select * from contacts";
		$query=$this->db->query($sql_4);
		$row=$query->row(0);
		return $row;
		
	}

	function submitContact()
	{
		global $db,$lang;
		include_once INCLUDE_PATH_ROOT."check_captcha.php";
		$check_captcha=checkImageCaptcha();
		if(!$check_captcha)
		{
		
			$msg=CAPTCHA_UNSUCCESSFULL;	
		//	$msg=SEND_MAIL_SUCCESS;
			$url="index.php?m=contact&u=contact&act=viewContact";
			msgBox($msg,$url);
			return;
		}
	//	die("vao");
		$from_name=$_REQUEST['from_name'];
		$from_email=$_REQUEST['mail_address'];
		$subject=$_REQUEST['mail_subject'];
		$body=$_REQUEST['message'];
		$file=$_FILES['add_file'];
		$sql="SELECT  * FROM contacts";
		$contact_data=$db->get_row($sql,0,ARRAY_A);
		$mail = new PHPMailer(); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch															   
		$mail->IsSMTP();                           // tell the class to use SMTP
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		if(strpos($contact_data['smtp_username'],"@gmail.com",0))
				;
			else
				$mail->Port = $contact_data['smtp_post'];   
		$flag_add_file=0;
		if(isset($file) && $file['tmp_name']!="")
		{
			
			$dir_tmp="tmp";
			if (!is_dir($dir_tmp)) mkdir($dir_tmp, 0777);
			$file_copy = copyimgurl($file['tmp_name'],$dir_tmp,$file['name']);
			$mail->AddAttachment($file_copy);
			chmod($file_copy,0777);
			$flag_add_file=1;
		}
		
		$mail->Host       =	$contact_data['smtp_host']; // ssl://smtp.gmail.com:465
		$mail->Username   = $contact_data['smtp_username'];     
		$mail->Password   = $contact_data['smtp_pass'];         
		$mail->AddReplyTo("$from_email","$from_email");
		$mail->From       = "$from_email";
		$mail->FromName   = "$from_name";
		$to = $contact_data['smtp_username'];
		$mail->AddAddress($to);
		$mail->Subject  = "$subject";
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap   = 80; // set word wrap
		$mail->MsgHTML($body);
		$mail->IsHTML(true); // send as HTML
		if($mail->Send())
		{
			
			$msg=SEND_MAIL_SUCCESS;
			
		}else
		{
			$msg=SEND_MAIL_FALSE;
		}
		if($flag_add_file==1)
			unlink($file_copy);
	
		$url="index.php?m=contact&u=contact&act=viewContact";
		msgBox($msg,$url);
		
	}
}

?>