<?php
class Block extends CI_Model {
	function __construct() {
		// Call the Model constructor
		$this->load->database ();
		parent::__construct ();
	}
	/**
	 * generate right header
	 */
	public function rightHeader($arrConfig = array(), &$smarty = null) {
		if ($this->config->item ( 'index_page' ) == "") {
			$basePath = $arrConfig ['basePath'] . 'backend/';
		} else {
			$basePath = $arrConfig ['basePath'] . 'backend/' . 'index.php/';
		
		}
		$linkCurrent = 'http://' . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI'];
		$arrReturn = array ();
		$arrReturn [0] ['image_link'] = 'flag_en.png';
		$arrReturn [1] ['image_link'] = 'flag_vi.png';
		if ($arrConfig ['language_abbr'] != "") {
			$arrReturn [0] ['link'] = preg_replace ( '|' . $basePath . '(\w{2})(.+)|iUs', $basePath . "en$2", $linkCurrent );
			$arrReturn [1] ['link'] = preg_replace ( '|' . $basePath . '(\w{2})(.+)|iUs', $basePath . "vi$2", $linkCurrent );
		
		} else {
			
			$arrReturn [0] ['link'] = preg_replace ( '|' . $basePath . '(.*)|iUs', $basePath . "en/$1", $linkCurrent );
			$arrReturn [1] ['link'] = preg_replace ( '|' . $basePath . '(.*)|iUs', $basePath . "vi/$1", $linkCurrent );
		
		}
		switch ($arrConfig ['language_abbr']) {
			case "en" :
				
				$arrReturn [0] ['class'] = 'hidden';
				$arrReturn [1] ['class'] = '';
				break;
			case "vi" :
				$arrReturn [0] ['class'] = '';
				$arrReturn [1] ['class'] = 'hidden';
				break;
			default :
				$arrReturn [0] ['class'] = 'hidden';
				$arrReturn [1] ['class'] = '';
				break;
		
		}
		$arrConfig ['data'] = $arrReturn;
		$data = $this->load->view ( "templates/" . $arrConfig ['template'] . "/right_header", $arrConfig, true );
		if ($smarty != null)
			$smarty->assign ( "RIGHT_HEADER", $data, true );
	}
	public function header ($arrConfig)
    {
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/header", 
		$arrConfig, true);
		return $data;
    }
	
	/**
	 * Get menu item
	 * @param $parent_id
	 * @param $db
	 * @param $table
	 * @param $lang
	 * @param $str
	 */
	
	public function menuTop($arrConfig = array(), &$smarty = null) {
		$this->lang->load ( 'menu_top', $arrConfig ['language'] );
		$wheres = array ();
		$wheres ['language'] = $arrConfig ['language'];
		$arrConfig ['data'] = array ();
		$classAlbum = '';
		$classUser = '';
		$classHomepage = '';
		$classArticle = '';
		$classProduct = '';
		$classCategory = '';
		$classContact = '';
		$classMenu = '';
		switch ($arrConfig ['activeLink']) {
			case "albums" :
			case "category_album" :
			case "banner" :
				$classAlbum = "current";
				break;
			case "users" :
				$classUser = "current";
				break;
			case "aclrole" :
				$classUser = "current";
				break;
			case "articles" :
			case "category_article" :
				$classArticle = "current";
				break;
			case "product" :
			case "category_product" :
				$classProduct = "current";
				break;
			case "contacts" :
				$classContact = "current";
				break;
			case "menu" :
				$classMenu = "current";
				break;
			default :
				$classHomepage = "current";
				break;
		}
		$arrClassLink = array ('classAlbum' => $classAlbum, 'classUser' => $classUser, 'classHomepage' => $classHomepage, 'classArticle' => $classArticle, 'classProduct' => $classProduct, 'classCategory' => $classCategory, 'classContact' => $classContact, 'classMenu' => $classMenu );
		//    	$this->load->library('view');
		$arrConfig ['arrClassLink'] = $arrClassLink;
		$data = $this->load->view ( "templates/" . $arrConfig ['template'] . "/menutop", $arrConfig, true );
		return $data;
	
	}
	public function menuLeft($arrConfig, &$smarty = null) {
		$arrLink = array ();
		switch ($arrConfig ['activeLink']) {
			case "usesr" :
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'users/index/' . '">'.$this->lang->line('List User').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'users/add/' . '">'.$this->lang->line('Add User').'</a>';
				break;
			case "article" :
			case 'category_article' :
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'article/index/' . '">'.$this->lang->line('List Article').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'article/add/' . '">'.$this->lang->line('Add Article').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_article/index/' . '">'.$this->lang->line('List Category').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_article/add/' . '">'.$this->lang->line('Add Category').'</a>';
				break;
			case "product" :
			case 'category_product' :
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'product/index/' . '">'.$this->lang->line('List Product').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'product/add/' . '">'.$this->lang->line('Add Product').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_product/index/' . '">'.$this->lang->line('List Category').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_product/add/' . '">'.$this->lang->line('Add Category').'</a>';
				break;
			case "album" :
			case 'category_album' :
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'album/index/' . '">'.$this->lang->line('List Album').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'album/add/' . '">'.$this->lang->line('Add Album').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_album/index/' . '">'.$this->lang->line('List Category').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_album/add/' . '">'.$this->lang->line('Add Category').'</a>';
				break;
			case "banner" :
			case 'category_banner' :
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'banner/index/' . '">'.$this->lang->line('List Banner').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'banner/add/' . '">'.$this->lang->line('Add Banner').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_banner/index/' . '">'.$this->lang->line('List Category').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'category_banner/add/' . '">'.$this->lang->line('Add Category').'</a>';
				break;				
			default :
			case "albums" :
			case 'menu' :
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'menu/index/' . '">'.$this->lang->line('List Menu').'</a>';
				$arrLink [] = '<a href="' . $arrConfig ['base_url'] . 'menu/add/' . '">'.$this->lang->line('Add Menu').'</a>';
				break;
		
		}
		$arrConfig ['left_menu'] = $arrLink;
		//		print_r($arrLink);exit;
		$data = $this->load->view ( "templates/" . $arrConfig ['template'] . "/menuleft", $arrConfig, true );
		return $data;
	}
	/**
	 * Get menu
	 * @param unknown_type $db
	 * @param unknown_type $table
	 * @param unknown_type $lang
	 */
	public function menuRight($arrConfig) {
		$data = $this->load->view ( "templates/" . $arrConfig ['template'] . "/menuright", $arrConfig, true );
		return $data;
	
	}

}
?>