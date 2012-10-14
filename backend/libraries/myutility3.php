<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MyUtility3{
function ComputeIPNumber($IpAddress)
{ 
	$valuex = ip2long($IpAddress);
	if($valuex < 0)
		$newTotalSum = 0xffffffff + $valuex;
	else
		$newTotalSum = $valuex;
	return $newTotalSum;
}

function GetCountryByIP($IpAddress,$filename="common/ip-to-country.csv")
{
	// Enter the filename of the database file downloaded from ip-to-country.com   
	$found = FALSE;
	// Open File in Read-Only Mode
	if(file_exists($filename)){
		if($filehandle = fopen($filename, "r"))
		{
			while($data = fgetcsv($filehandle, 1000, ","))
			{
				if($IpAddress != NULL)
				{
					$IpNumber = ComputeIPNumber($IpAddress);
	
					if($IpNumber >= $data[0] && $IpNumber <= $data[1])
					{
						$found = $data[2];
						break;
					}
				}
			}
		}
		fclose($filehandle);
	}
	return $found;
}


function GeneralRandomKey($size){
	$keyset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_";
	$randkey = "";
	for ($i=0; $i<$size; $i++)
		$randkey .= substr($keyset, rand(0,strlen($keyset)-1), 1);
	return $randkey;
}

function GeneralRandomReferralCode($size){
	$keyset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$randkey = "";
	for ($i=0; $i<$size; $i++)
		$randkey .= substr($keyset, rand(0,strlen($keyset)-1), 1);
	return $randkey;
}

function getShortContent($str,$length)
{
	$result = '';
	$st		= '';
	for($i=0;$i<$length;$i++)
		if(trim(substr($str,$i,1))!='')
			$st .= substr($str,$i,1);
		else{
			$result .= $st.' ';
			$st = '';
		}

	return $result;
}
//date is dd/mm/yyyy
function dateToTimeStamp($date)
{
	$a=split("/","$date");
	return mktime(0,0,0,$a[1],$a[0],$a[2]);
}
#------------------------------------------------------------------------------------------------------------
#input : $date : dd/mm/yyyy
#return date

function dateAdd($date, $add)
{
	$date_added = gmdate("d/m/Y", mktime(0,0,0,substr($date,3,2),substr($date,0,2)+1+$add,substr($date,6,4)));
	return $date_added;
}
#--------------------------------------------------------------------------
#input : datetime
#return : time
function get_time($str)
{
	if (($timestamp = strtotime($str)) === -1)
		//echo "The string ($str) is bogus";
		return "";
	else
		 return date('h:i A',$timestamp);
}

#-----------------------------------------------------------------------------------
#In  :  type : 1 (dd/mm/yyyy), 0 (yyyy-mm-dd)
#Out :  2 : date1 > date2, 0 : date1 < date2, 1 : date1 = date2
function compareDate($date1, $date2, $type=1)
{
	if ($type==0)
	{
		$n1 = strtotime($date1);
		$n2 = strtotime($date2);
	}elseif($type==1){
		$n1 = dateToTimeStamp($date1);
		$n2 = dateToTimeStamp($date2);
	}

	if ($n1 > $n2)
		return 2;
	else if ($n1 < $n2)
		return 0;
	else return 1;
}
#-------------------------------------------------------------------------------------------
#In  :  Date (dd/mm/yyyy)
#Out :  0: Mon, 1: Tue,..., 6: Sun
function whatIsToday($date)
{
	$n1 = dateToTimeStamp($date);
	$date = getdate($n1);
	if ($date['wday'] == 0)
		return 6;
	else
		return $date['wday']-1;
}
#----------------------------------------------------------------------------------
function GetTime($date_time)
{
	$night = substr($date_time,-2);
	$date_time = substr($date_time,-8);
	$arr_date = explode(":", $date_time);

	$tmp = explode(" ", $arr_date[0]);

	if (count($tmp) > 1)
	{
		if (strlen(trim($tmp[1])) > 0)
			$arr_date[0] = doubleval($tmp[1]);
	}
	else
		$arr_date[0] = doubleval($arr_date[0]);

	if($night == "PM")
		$arr_date[0] = $arr_date[0] + 12;
	if($arr_date[0] == 24) $arr_date[0] = 0;
	$arr_date[1] = doubleval($arr_date[1]);

	return $arr_date;
}
function GetCurrentDate()
{
	$today = getdate();
	$day   = $today["mday"];
	$month = $today["mon"];
	$year  = $today["year"];
	$date  = "$year-$month-$day";
	return $date;
}

#-------------------------------------------------------------------------------------
function decode_password($psw)
{
	$referer =  unserialize(base64_decode($psw));
	return $referer;
}
#-------------------------------------------------------------------------------------
function encode_password($psw)
{
	$direct = base64_encode(serialize($psw));
	return $direct;
}

#----------------------------------------------------------------------------------
function number_format_r($number, $decimal=2)
{
	return number_format($number, $decimal);
}


#Description :Split a string into array

function partitionString($strStart,$strEnd,$strContent)
{
	$intStart	= strpos($strContent,"$strStart",0);
	$intEnd		= strpos($strContent,"$strEnd",0);
	if($intStart===false || $intStart===false)
	{
		$dat[0]=$strContent;
		$dat[1]="";
		$dat[2]="";
		return $dat;
	}
	$strHeader	= substr($strContent,0,$intStart);
	$strRow		= substr($strContent,$intStart+strlen($strStart),$intEnd-$intStart-strlen($strStart));
	$strFooter	= substr($strContent,$intEnd+strlen($strEnd),strlen($strContent));

	$dat	= array();
	$dat[0]	= $strHeader;
	$dat[1]	= $strRow;
	$dat[2]	= $strFooter;
	return $dat;
}
#-----------------------------------------------------------------------------------
function getMaxDayOfMonth($month,$year)
{
	$d=31;
	while($d>0 && !checkdate($month,$d,$year))
		$d--;
		return $d;

}
#-------------------------------------------------------------------------------------------
#Display year got from mysql databse
#Input : yyyy-mm-dd
#Out   : dd/mm/yyyy
function displayDate($str)
{
	if (trim($str)=="") 
		return "";
	$str=strtotime($str);
	$str=@date("Y/m/d",$str);
	list($y,$m,$d)=split('[/.-]',$str);
	if(!@checkdate($m,$d,$y))
		return "";
	return "$d/$m/$y";
}
#-------------------------------------------------------------------------------------------
function displayYear($str)
{
	if (trim($str)=="") 
		return "";
	$str=strtotime($str);
	$str=@date("Y/m/d",$str);
	list($y,$m,$d)=split('[/.-]',$str);
	if(!@checkdate($m,$d,$y))
		return "";
	return "$y";

}
#-------------------------------------------------------------------------------------------
function displayMonth($str)
{
	if (trim($str)=="") 
		return "";
	$str=strtotime($str);
	$str=@date("Y/m/d",$str);
	list($y,$m,$d)=split('[/.-]',$str);
	if(!@checkdate($m,$d,$y))
		return "";
	return "$m";
}
#-------------------------------------------------------------------------------------------
function displayDay($str)
{
	if (trim($str)=="") 
		return "";
	$str=strtotime($str);
	$str=@date("Y/m/d",$str);
	list($y,$m,$d)=split('[/.-]',$str);
	if(!@checkdate($m,$d,$y))
		return "";
	return "$d";
}

#Send email
function sendmail_mime($mailto,$mailcc,$subject,$sender_name,$sender_email,$mailcontent)
{
	$extra  = "From: $sender_name<$sender_email>\n";
	$extra .= "CC:  $mailcc\n";
//                $extra .= "Content-Type:  text/html ";
	$extra .= "Content-Type: multipart/alternative;\t";
	$extra .= "boundary=\"----=_NextPart_000_000F_01C396F9.05F7B9D0\"\n";

	$mailheader  = "------=_NextPart_000_000F_01C396F9.05F7B9D0\n";
	$mailheader .= "Content-Type: text/html;\t";
	$mailheader .= "charset=\"utf-8\"\n";
	$mailheader .= "Content-Transfer-Encoding: quoted-printable\n";
	$mailheader .= "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n";
	$mailheader .= "<HTML><HEAD>\n";
	$mailheader .= "<META http-equiv=3DContent-Type content=3D\"text/html; = charset=3Diso-8859-1\">\n";
	$mailheader .= "<META content=3D\"MSHTML 6.00.2800.1106\" name=3DGENERATOR>\n";
	$mailheader .= "<STYLE></STYLE>\n";
	$mailheader .= "</HEAD>\n";
	$mailheader .= "<BODY>\n";
	$mailheader .= "<DIV>&nbsp;</DIV>\n";
	$mailfooter  = "</BODY></HTML>\n";
	$mailfooter .= "------=_NextPart_000_000F_01C396F9.05F7B9D0--\n";
	$mailcontent = $mailheader.$mailcontent.$mailfooter;


	if(empty($mailto))
	  return FALSE;

	if(mail($mailto,$subject,$mailcontent,$extra))
	   return TRUE;
	else
	   return FALSE;
}


function isValidEmail($email){
	return eregi("\b([A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4})\b", $email);
}


#------------------------------------------------------------------------------------
#Manipulation csv file

function CSVExport($query)
{	
	header("Content-type: charset=UTF-8");
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=data.csv");
	$sql_csv = mysql_query($query) or die("Error: " . mysql_error()); //Replace this line with what is appropriate for your DB abstraction layer			
	while($row = mysql_fetch_row($sql_csv)) {		
		print '"' . stripslashes(implode('","',$row)) . "\"\n";
	}			
	exit();	
}
	
function CSVImport($csv_fieldname)
{
	//if(!$_FILES[$csv_fieldname]['name']) return;
	
	$handle = fopen($csv_fieldname,'r');
	if(!$handle) die('Cannot open uploaded file.');
	$rows = array();
	$dem=0;
	$restore_email=0;
	//Read the file as csv
	while (($data = fgetcsv($handle, 10*1024, ",")) !== FALSE) 
	{
		
		foreach($data as $key=>$value) 
		{
			$data[$key] = "'" . addslashes($value) . "'";
		}							
		$rows[] = implode(",",$data);
					
	}
	fclose($handle);		
	
} 

function download_file($file_name)
{
	$filename = $file_name;

	// required for IE, otherwise Content-disposition is ignored
	if(ini_get('zlib.output_compression'))
		ini_set('zlib.output_compression', 'Off');
	
	// addition by Jorg Weske
	$file_extension = strtolower(substr(strrchr($filename,"."),1));
	
	if( $filename == "" ) 
	{
	  echo "<html><title>eLouai's Download Script</title><body>ERROR: download file NOT SPECIFIED. USE force-download.php?file=filepath</body></html>";
	  exit;
	} elseif ( ! file_exists( $filename ) ) 
	{
	  echo "<html><title>eLouai's Download Script</title><body>ERROR: File not found. USE force-download.php?file=filepath</body></html>";
	  exit;
	};
	switch( $file_extension )
	{
	  case "pdf": $ctype="application/pdf"; break;
	  case "exe": $ctype="application/octet-stream"; break;
	  case "zip": $ctype="application/zip"; break;
	  case "doc": $ctype="application/msword"; break;
	  case "xls": $ctype="application/vnd.ms-excel"; break;
	  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
	  case "gif": $ctype="image/gif"; break;
	  case "png": $ctype="image/png"; break;
	  case "jpeg":
	  case "jpg": $ctype="image/jpg"; break;
	  default: $ctype="application/force-download";
	}
	header("Pragma: public"); // required
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: private",false); // required for certain browsers 
	header("Content-Type: $ctype");
	// change, added quotes to allow spaces in filenames, by Rajkumar Singh
	header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($filename));
	readfile("$filename");
	exit();
}

function copyimgurl($url,$savedir,$filename=""){
		$imgsave= explode("/",$url);
		$n=sizeof($imgsave)	;
		if($filename=="")
			$filename=$imgsave[$n-1];

		$fd = fopen ($url, "r");
     	if ($fd)
        	{
	             $buffer="";
    	         $total ="";
				 while (!feof ($fd))
				 {
						$buffer = fgets($fd, 4096);
						$total .= $buffer;
				  }
             
				
				
				//$ext=strrchr($filename, '.');
				//if(($ext!=".jpg")&&($ext!=".gif")&&($ext!=".png")){
					//$nran=rand(0,1000);
					//$filename = $nran .".jpg";
				//}
				$fdw = fopen ($savedir."/".$filename, "w"); 
				fclose ($fd);
				fwrite($fdw,$total);
				fclose ($fdw); 
		}
		return 	$savedir."/".$filename;		
	}

function call_imagecreatefrom($ext,$name)
	{
		switch($ext)
		{
			case "jpg":case"jpeg":return imagecreatefromjpeg($name);
			case "gif": return imagecreatefromgif($name);
			case "png":return imagecreatefrompng($name);
			
		}	
		return false;
	
	}
	
function call_image($ext,$image,$dest="")
{
	switch($ext)
	{
		case"jpg":case"jpeg":	
			if($dest=="") 
				imagejpeg($image);
			else  
				imagejpeg($image,$dest);
			break;
		case"gif":
			if($dest=="") 
				imagegif($image);
			else 
				imagegif($image,$dest);
			break;
		case"jpg":
			if($dest=="") 
				imagepng($image);
			else
				imagepng($image,$dest);
			break;
			
	}
	return true;

}
	
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
		
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
    	'u'=>$ub,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 	

function cv2urltitle($text) {


$text = str_replace(
array(' ','%',"/","\\",'"','?','<','>',"#","^","`","'","=","!",":" ,",,","..","*","&","__","▄"),
array('-','' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'-','' ,'-','' ,'' ,'' , "_" ,"" ,""),
$text);
$chars = array("a","A","e","E","o","O","u","U","i","I","d", "D","y","Y");
$uni[0] = array("á","à","ạ","ả","ã","â","ấ","ầ", "ậ","ẩ","ẫ","ă","ắ","ằ","ặ","ẳ","� �");
$uni[1] = array("Á","À","Ạ","Ả","Ã","Â","Ấ","Ầ", "Ậ","Ẩ","Ẫ","Ă","Ắ","Ằ","Ặ","Ẳ","� �");
$uni[2] = array("é","è","ẹ","ẻ","ẽ","ê","ế","ề" ,"ệ","ể","ễ");
$uni[3] = array("É","È","Ẹ","Ẻ","Ẽ","Ê","Ế","Ề" ,"Ệ","Ể","Ễ");
$uni[4] = array("ó","ò","ọ","ỏ","õ","ô","ố","ồ", "ộ","ổ","ỗ","ơ","ớ","ờ","ợ","ở","� �");
$uni[5] = array("Ó","Ò","Ọ","Ỏ","Õ","Ô","Ố","Ồ", "Ộ","Ổ","Ỗ","Ơ","Ớ","Ờ","Ợ","Ở","� �");
$uni[6] = array("ú","ù","ụ","ủ","ũ","ư","ứ","ừ", "ự","ử","ữ");
$uni[7] = array("Ú","Ù","Ụ","Ủ","Ũ","Ư","Ứ","Ừ", "Ự","Ử","Ữ");
$uni[8] = array("í","ì","ị","ỉ","ĩ");
$uni[9] = array("Í","Ì","Ị","Ỉ","Ĩ");
$uni[10] = array("đ");
$uni[11] = array("Đ");
$uni[12] = array("ý","ỳ","ỵ","ỷ","ỹ");
$uni[13] = array("Ý","Ỳ","Ỵ","Ỷ","Ỹ");

for($i=0; $i<=13; $i++) {
$text = str_replace($uni[$i],$chars[$i],$text);
}

return $text;
	
}

function CovertVn($str)
{
$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|� �|ặ|ẳ|ẵ)/", 'a', $str);
$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|� �|ợ|ở|ỡ)/", 'o', $str);
$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
$str = preg_replace("/(đ)/", 'd', $str);
$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|� �|Ặ|Ẳ|Ẵ)/", 'A', $str);
$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|� �|Ợ|Ở|Ỡ)/", 'O', $str);
$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
$str = preg_replace("/(Đ)/", 'D', $str);
//$str = preg_replace("/( )/", '_', $str);
return $str;
}
function getExtFile($link)
{

	$path_info = pathinfo($link);
	$ext = $path_info["extension"];
	return $ext;
}
function ConvertUtf8($string)
{
   $detect = mb_detect_encoding($string,"UTF-8, ISO-8859-1, GBK");
   return ($detect == 'UTF-8' ? $string : mb_convert_encoding($string, "HTML-ENTITIES", "ISO-8859-1"));
   
}

}

