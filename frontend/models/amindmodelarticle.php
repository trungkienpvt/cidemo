<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');include_once("fckeditor/fckeditor.php") ;
//	Restricted access
class AdminModelArticle extends CI_Model{
function __construct(){
	// Call the Model constructor
	$this->load->database();
	parent::__construct();
}
/**
 * Preview article item
 */

function previewArticle()
{
	$idArt=$_REQUEST['idArt'];
	$sql="select * from article where idArticle='$idArt'";
	
	$artInfo=$db->get_results($sql,ARRAY_A);
	foreach($artInfo as $row)
		$data=$row;
	$title = $data['title'];
	$content = $data['content'];
	include_once THEME_PATH_ROOT.$theme.'/templates/previewViewArticle.php';
	
}

function viewArticle()
{
	global $db,$theme,$m,$u,$act,$lang;
	$result=array();
	//THU HIEN CAU TRUY VAN DE VIEW ARTICLE
	$sql="select * from article";
	$listPageNumber="";
	$listPageButton_1="";
	$listPageButton_2="";
	$page=0;
	$page_start=0;
	$page_end=0;
	$page_action=0;
	$url="admin.php?m=article&u=article&act=viewArticle";
	pagingK($sql,$result,$listPageNumber,$listPageButton_1,$listPageButton_2,$url,$db,$page,$page_start,$page_end,$page_action);
	$strRow='';
	$number_row=0;
	if($db->num_rows_db())
  	{
		
		$k=0;
		
		foreach($result as $article)
	 	{
			
			
		$strRow.="<tr class='row".$k."'><td><input  type='checkbox' onclick='isChecked(this);' name='cid[]' id='c_$number_row' value='".$article['idArticle']."' /></td>   
			  <td >".$article['title']."</td>
			   <td >".trim($article['description'])."</td>
			   <td ><a href='admin2.php?m=article&u=article&act=previewArticle&idArt=".$article['idArticle']."' class='fancybox11'><img src=\"".$article['image']."\" style='width:96px' /></a></td>
			   <td >".date("d/m/y",$article['datetime'])."</td>
			   <td >".$article['language']."</td>
					
			</tr>";	
			$k=1-$k;
			$number_row++;
   		}
  	}
  	if($listPageNumber!="")
		$strListPage="<br><H3>".$listPageButton_1."&nbsp;".$listPageNumber."&nbsp;".$listPageButton_2."</h3><br/>";
	else
		$strListPage="";
	$url_add='admin.php?m=article&u=article&act=addArticle';
	include_once THEME_PATH_ROOT.$theme.'/templates/viewArticle.php';

}
function addArticle()
{
	global $db,$theme,$m,$u,$act,$lang;
	$translate_enalble=false;
	//TRUY VAN DE LAY CAC CATEGORY
	$sql_4="select * from category where language='$lang'";
	$category=$db->get_results($sql_4,ARRAY_A);
	$oContent = new FCKeditor('txtContent') ;
	$oContent->Value= "";
	$content_value=$oContent->Create();
	$strRow="<option value=''>".SELECT."</option>";
    if($db->num_rows_db())
	{
		
		foreach($category as $cat)
		{ 
			 $strRow.="<option value='".$cat['idCategory']."' >".$cat['catName']."</option>";
					  
        }
	}
	$title_page=TITLE_PAGE_ADD_ARTICLE;
	$article='';
	$title='';
	$description='';
	$act='submitAddArticle';
	$session_id=session_id();
	$image_thumbnail="<div id='thumbnail_tmp'><img style='margin: 5px; opacity: 1;' src='images/insert-here.png''></div>";
	include_once THEME_PATH_ROOT.$theme.'/templates/addArticle.php';
}
function editArticle()
{
	global $db,$theme,$m,$u,$act,$lang,$translate,$rid;
	$cid=$_REQUEST['cid'];
	if(is_array($cid))
		$idArticle=$_REQUEST['cid'][0];
	else
		$idArticle=$cid;
	$sql_1="select * from article where idArticle=$idArticle ";
	$row=$db->get_row($sql_1,0,ARRAY_A);
	$rid=$row['rid'];
	$title=$row['title'];
	$description=$row['description'];
	$artImage=$row['image'];
	$language=$row['language'];
	if(!isset($_REQUEST['translate']) && $_REQUEST['translate']==""){
		$translate_enable=true;
		//get translate list article
		$arr_language=array('english','vietnamese');
		$k=0;
		foreach($arr_language as $r)
		{
		$sql="SELECT * FROM article WHERE rid=".$row['rid']." AND language='".$r."'";
			$row_2=$db->get_row($sql,0);
			//echo$sql;
			if($db->num_rows_db()>0)
			{
				
				$title_translate=$row_2->title;
				$language=$r;
				$tool_translate=" ";
				$status="Translate";
				
			}
			else 
			{
				
				$title_translate='Not translate';
				$language=$r;
				$tool_translate="<a href='admin.php?m=article&u=article&act=editArticle&translate=$r&cid=$idArticle'>".ADD_TRANSLATE_LBL."</a>";				
				$status="Not translate";
				
			}
			
			$dataTranslate.="<tr class='row".$k."'><td>".$title_translate."</td><td>".$language."</td><td>".$status."</td><td>".$tool_translate."</td></tr>";
			$k=1-$k;	
			
		}
		$title_page=TITLE_PAGE_EDIT_ARTICLE;		
		$act='submitEditArticle';	
	}
	else{
		
		$idArticle=$_REQUEST['cid'];
		$translate=$_REQUEST['translate'];
		$title_page=TITLE_PAGE_ADD_ARTICLE;
		$act='submitAddArticle';
		$language=$_REQUEST['translate'];
	}
	//GET LIST CATEGORY
	$sql_4="select * from category where language='$language'";
	$category=$db->get_results($sql_4,ARRAY_A);
	$oFCKeditor = new FCKeditor('txtContent') ;
	$oFCKeditor->Value= $row['content'];
	$content_value=$oFCKeditor->Create();
	$strRow="<option value=''>-".SELECT."-</option>";
    if($db->num_rows_db())
		foreach($category as $cat)
		{ 
			if($article['idCategory'] == $cat['idCategory'])
			{
						 
			   $strRow.="<option value='".$cat['idCategory']."' selected='selected' >".$cat['catName']."</option>";
			}
			else
			{ 
				 $strRow.="<option value='".$cat['idCategory']."' >".$cat['catName']."</option>";
			
			}
        
        }
	$session_id=session_id();
	$image_thumbnail="<div id='thumbnail_tmp'><img style='margin: 5px; opacity: 1;' src='".$row['image']."'></div>";
	include_once THEME_PATH_ROOT.$theme.'/templates/addArticle.php';
	
}
function deleteArticle()
{
	global $db;
	$ids=$_REQUEST['cid'];
	foreach($ids as $id)
	{
		//get translate id
		$sql="SELECT * FROM article WHERE idArticle=$id";
		$row=$db->get_row($sql,0,ARRAY_A);
		$rid=$row['rid'];
		//get total item translate
		$sql="SELECT * FROM article WHERE rid=$rid";
		$result=$db->get_results($sql,ARRAY_A);
		if(count($result)==1){
			$sql_2="DELETE FROM translate_id WHERE id=$rid";
			$result_2=$db->query($sql_2);	
		}
		$sql="DELETE FROM article WHERE idArticle=$id";
		$result=$db->query($sql);
		if(!$result)
		{	
			if(file_exists($row['image']))
				unlink($row['image']);
			$msg=DELETE_ARTICLE_FAIL;
			$url="admin.php?m=article&u=article&act=viewArticle";
			msgBox($msg,$url);
			break;
		}
		
	}
	$msg=DELETE_ARTICLE_SUCCESS;
	$url="admin.php?m=article&u=article&act=viewArticle";
	msgBox($msg,$url);
	
		
	
}

function submitAddArticle()
{
	global $db,$lang;
	if(isset($_REQUEST['translate'])&& $_REQUEST['translate']!="")
	{
		
		$article_lang=$_REQUEST['translate'];
	}
	else 
		$article_lang=$lang;
	if(isset($_REQUEST['rid']) && $_REQUEST['rid']!="")
	{
		$rid=$_REQUEST['rid'];
	}
	else 
		$rid=0;
	$title=addslashes($_REQUEST['txtTitle']);
	$description=stripslashes($_REQUEST['txtDescription']);
	$content = stripslashes( $_POST['txtContent'] ) ;
	$dateTime=(int)time()+7*3600;
	$idCategory=$_REQUEST['category'];
	if(isset($_SESSION["file_info"]))
	{
		$file_img_src=$_SESSION["file_info"]['file_img_src'];
		$file_thumb_src=$_SESSION["file_info"]['file_thumb_src'];
		$file_name=$_SESSION["file_info"]['file_name'];
	}
	else
	{
		$file_img_src="";
		$file_thumb_src="";
		$file_name="";
	}
	$flag_noimage=0;
	if(!file_exists($file_img_src))
	{
		$flag_noimage=1;
		$file_name="no_image.gif";
		$file_thumb_src="images/no_image.gif";
		$file_img_src="images/no_image.gif";
		$ext='gif';
	}
	$tsrc_imageThumb="uploads/article/thimage/".time().$file_name;
	$foto =  new SimpleImage();
	if($flag_noimage==1)
	{
		$foto->load($file_img_src);
		$foto->resizeToWidth(100);
		$foto->save($foto->image,$tsrc_imageThumb,$foto->image_type);
		
	
	}
	else
	{
		
		
		$foto->load($file_img_src);
		$foto->resizeToWidth(100);
		$foto->save($foto->image,$tsrc_imageThumb,$foto->image_type);
		if(file_exists($file_thumb_src))
			unlink($file_thumb_src);
		if(file_exists($file_img_src))
			unlink($file_img_src);
	}
	
	$_SESSION["file_info"]['file_img_src']="";
	$_SESSION["file_info"]['file_thumb_src']="";
	chmod("$tsrc_imageThumb",0777);
	//get id translate
	if($rid==0){
		$sql="INSERT INTO translate_id(translate_type)VALUES('article')";
		$db->query($sql);
		$rid=$db->insert_id_db();
	}
	$sql="INSERT INTO  article(rid,title,description,content,image,datetime,idCategory,tab,language)
VALUES($rid,'$title','$description','$content','$tsrc_imageThumb',$dateTime,$idCategory,0,'$article_lang')";//die($sql);
	if($db->query($sql))
	{
		$msg=ADD_ARTICLE_SUCCESS;
		$url="admin.php?m=article&u=article&act=viewArticle";
		msgBox($msg,$url);
	}else
	{
		
		$msg=ADD_ARTICLE_FAIL;
		$url="admin.php?m=article&u=article&act=viewArticle";
		msgBox($msg,$url);
	}
	
}
function submitEditArticle()
{
	global $db,$lang;
	$idArticle=(int)$_REQUEST['id'];
	$title=addslashes($_REQUEST['txtTitle']);//die($title);
	$description=stripslashes($_REQUEST['txtDescription']);
	$content = stripslashes($_REQUEST['txtContent']) ;
	$dateTime=(int)time()+7*3600;
	$idCategory=$_REQUEST['category'];
	if(isset($_SESSION["file_info"]))
	{
		$file_img_src=$_SESSION["file_info"]['file_img_src'];
		$file_thumb_src=$_SESSION["file_info"]['file_thumb_src'];
		$file_name=$_SESSION["file_info"]['file_name'];
	}
	else
	{
		$file_img_src="";
		$file_thumb_src="";
		$file_name="";
	}
	//lay thong tin article can edit
	$sql="select * from article where idArticle=$idArticle";
	$row=$db->get_row($sql,0,ARRAY_A);
	//kiem tra image co can edit ko
	if(file_exists($file_img_src))
	{
		if(file_exists($row['image']))
			unlink($row['image']);
		
		$tsrc_imageThumb="uploads/article/thimage/".time().$file_name;
		$foto =  new SimpleImage();
		$foto->load($file_img_src);
		$foto->save($foto->image,$tsrc_imageThumb,$foto->image_type);
		if(file_exists($file_thumb_src))
			unlink($file_thumb_src);
		if(file_exists($file_img_src))
			unlink($file_img_src);
		chmod("$tsrc_imageThumb",0777);	
		$_SESSION["file_info"]['file_img_src']="";
		$_SESSION["file_info"]['file_thumb_src']="";
		$sql="UPDATE article SET title='$title',description='$description',
	 content='$content',image='$tsrc_imageThumb',datetime=$dateTime,
	 idCategory=$idCategory	WHERE idArticle=$idArticle";
	}else
		$sql="UPDATE article SET title='$title',description='$description',
	 content='$content',datetime=$dateTime,idCategory=$idCategory
	 	WHERE idArticle=$idArticle";
	if($db->query($sql))
	{
		$msg=EDIT_ARTICLE_SUCCESS;
		$url="admin.php?m=article&u=article&act=viewArticle";
		msgBox($msg,$url);
	}else
	{
		$msg=EDIT_ARTICLE_FAIL;
		$url="admin.php?m=article&u=article&act=viewArticle";
		msgBox($msg,$url);
	}
}

}
?>