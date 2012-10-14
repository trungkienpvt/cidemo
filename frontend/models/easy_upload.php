<?php
class Easy_Upload extends CI_Model
{
    function __construct ()
    {
        // Call the Model constructor
        $this->load->database();
        parent::__construct();
    }
    function upload()
    {
	    $resize_width= $_REQUEST['resize_width'];
		if (isset($_POST["PHPSESSID"])) {
			session_id($_POST["PHPSESSID"]);
		}
		ini_set("html_errors", "0");
		// Check the upload
		if (!isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
			echo "ERROR:invalid upload";
			exit(0);
		}
		
		$file_name=time().$_FILES["Filedata"]['name'];
		$file_thumb_src="tmp/thumb$file_name";
		$file_img_src="tmp/$file_name";
		$path_info = pathinfo($file_img_src);
		$ext = $path_info["extension"];
		$foto =  new SimpleImage();
		$foto->load($_FILES["Filedata"]["tmp_name"]);
		if(isset($resize_width) && $resize_width!=0)
		{
			$foto2 =  new SimpleImage();
			$foto2->load($_FILES["Filedata"]["tmp_name"]);
			$foto2->resizeToWidth($resize_width);
			$foto2->save($foto2->image,$file_img_src,$foto2->image_type);
			
			
		}
		else
			$foto->save($foto->image,$file_img_src,$foto->image_type);
		$foto->resizeToWidth(100);
		$foto->save($foto->image,$file_thumb_src,$foto->image_type);
		// Get the image and create a thumbnail
		if (!isset($_SESSION["file_info"])) {
			$_SESSION["file_info"] = array();
		}
		chmod("$file_thumb_src",0777);
		chmod("$file_img_src",0777);
		// Use a output buffering to load the image into a variable
		$file_id = md5($_FILES["Filedata"]["tmp_name"] + rand()*100000);
		$_SESSION["file_info"]['file_name'] = $_FILES["Filedata"]['name'];
		$_SESSION["file_info"]['file_img_src'] = $file_img_src;
		$_SESSION["file_info"]['file_thumb_src'] = $file_thumb_src;
		echo "FILEID:" . $file_thumb_src;	// Return the file id to the script
    }
}
?>