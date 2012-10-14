<?php
defined('_JEXEC') or die('Restricted access');

function checkImageCaptcha()
{
	
	include_once 'common_captcha.php';	
	if(isset($_POST['security_code']))
	{
		$security_code = trim($_POST['security_code']);
		$to_check = md5($security_code);
		//die($to_check."session:".$_SESSION['security_code']);
		if($to_check == $_SESSION['security_code'])
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>