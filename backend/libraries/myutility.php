<?php
//	Restricted access
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MyUtility
{
//HAM HIEN THI NGAY HIEN HANH
function viewDate($date, $lang) {
	switch (date ( "N", $date )) {
		
		case 1 :
			if ($lang == "vietnamese")
				return 'Thá»© hai, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'Monday, ' . date ( "m/d/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
		case 2 :
			if ($lang == 'vietnamese')
				return 'Thá»© ba, ' . date ( "m/d/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'Tuesday, ' . date ( "m/d/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
		case 3 :
			if ($lang == 'vietnamese')
				return 'Thá»© tÆ°, ' . date ( "m/d/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'webstday, ' . date ( "m/d/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
		case 4 :
			if ($lang == 'vietnamese')
				return 'Thá»© nÄƒm, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'Thursday, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
		case 5 :
			if ($lang == 'vietnamese')
				return 'Thá»© sÃ¡u, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'Friday, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
		case 6 :
			if ($lang == 'vietnamese')
				return 'Thá»© báº£y, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'Saturday, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
		case 7 :
			if ($lang == 'vietnamese')
				return 'Chá»§ nháº­t, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			else
				return 'Sunday, ' . date ( "d/m/Y", $date ) . "," . date ( "G:i", $date ) . " GMT+7";
			break;
	}
}
//HAM CHUYEN GIA TRI NGAY DANG CHUOI THANH SO
function parseDateToInt($date) {
	$arr = array ();
	$arr = explode ( '/', $date );
	$newDate = mktime ( 0, 0, 0, ( int ) $arr [1], ( int ) $arr [0], ( int ) $arr [2] );
	return $newDate;

}

//HAM HIEN THI THONG BAO VA CHUYEN TRANG


function msgBox($msg, $url) {
	global $theme, $lang,$m,$u,$act;
	include_once THEME_PATH_ROOT.$theme .'/templates/transfer.php';
	
}

//HAM PHAN TRANG DU LIEU
function pagingK($sql, &$result, &$listPageNumber, &$listPageButton_1, &$listPageButton_2, $url, $db, &$page, &$page_start, &$page_end, &$page_action) {
	
}

function UpLoad_File($upload, &$url, &$msg) {
	//KIEM TRA PHUONG THUC SUBMIT
	if ($_SERVER ["REQUEST_METHOD"] != "POST") {
		$msg = "Dá»¯ liá»‡u Ä‘Æ°á»£c submit khÃ´ng pháº£i báº±ng method POST";
		return 0;
	}
	$flag = 1;
	//TIEP THEO KIEM TRA QUA TRINH UPLOAD CO LOI GI KHONG
	$error = $_FILES ["file_upload"] ["error"];
	
	if (! isset ( $error ) | $error != 0) {
		switch ($error) {
			case 1 :
				$msg = "dung lÆ°á»£ng file upload vÆ°á»£t quÃ¡ giá»›i háº¡n Ä‘Æ°á»£c cho bá»Ÿi file php.ini";
				$flag = 0;
				break;
			case 2 :
				$msg = "dung lÆ°á»£ng file upload vÆ°á»£t quÃ¡ giá»›i háº¡n Ä‘Æ°á»£c cháº¥p nháº­n bá»Ÿi MAX_FILE_SIZE.";
				$flag = 0;
				break;
			case 3 :
				$msg = "file chá»‰ Ä‘Æ°á»£c upload 1 pháº§n (cÃ³ thá»ƒ lÃ  do lá»—i Ä‘Æ°á»�ng truyá»�n trong quÃ¡ trÃ¬nh upload.";
				$flag = 0;
				break;
			case 4 :
				$msg = "khÃ´ng cÃ³ file nÃ o Ä‘Æ°á»£c upload (cÃ³ thá»ƒ lÃ  file á»Ÿ client khÃ´ng tá»“n táº¡i).";
				//$flag=0;
				$url = "no image";
				return 1;
			
			default :
				break;
		
		}
		
		if ($flag == 0)
			return 0;
	
	}
	
	//KIEM TRA XEM DUNG LUONG FILE CO VUOT QUA GIOI HAN CHO PHEP KHONG
	if ($_FILES ["file_upload"] ["size"] > MAX_FILE_SIZE) {
		//thÃ´ng bÃ¡o l?i
		$msg = " kÃ­ch thá»©á»›c file khÃ´ng phÃ¹ há»£p";
		return 0;
	
	}
	
	//TACH TEN FILE TU CLIENT
	$temp = preg_split ( '/[\/\\\\]+/', $_FILES ["file_upload"] ["name"] );
	$filename = $temp [count ( $temp ) - 1];
	//KIEM TRA KIEU CUA FILE CO HOP LE KHONG
	if (! preg_match ( '/\.(gif|jpg|bmp)$/i', $filename )) {
		$msg = " kiá»ƒu file khÃ´ng phÃ¹ há»£p";
		return 0;
	}
	
	//CUOI CUNG, LUU FILE DUOC UPLOAD VAO NOI CAN THIET
	$upload_dir = $upload;
	$upload_file = $upload_dir . time () . $filename;
	if (move_uploaded_file ( $_FILES ["file_upload"] ["tmp_name"], $upload_file )) {
		$msg = "file Ä‘Ã£ Ä‘Æ°Æ¡c upload vÃ  copy sang thÆ° má»¥c lÆ°u trá»¯ thÃ nh cÃ´ng";
		$url = $upload_file;
		return 1;
	} else {
		$msg = "cÃ³ lá»—i xáº£y ra";
		return 0;
	}

}
}
?>