<?php
require_once "model_language.php";
class Model_Category_Product extends Model_Language {
	var $table_name = 'users';
	var $primaryKey = 'id';
	function __construct() {
		parent::__construct ();
		$this->table_name = "category_product";
		$this->reference_id = "rid";
	
	}
	function getItemById($id) {
		$query = $this->db->get_where ( $this->table_name, array ($this->primaryKey => $id ) );
		return $query->row_array ();
	
	}
	/**
	 * check category exist category child
	 */
	public function isExistCategoryChild($idCat) {
		$this->db->select ( '*' );
		$table = $this->table_name;
		$this->db->from ( $table );
		$this->db->where ( "idParent", ( int ) $idCat );
		$query = $this->db->get ();
		//				print($this->db->last_query());exit;
		$result = $query->result_array ();
		if (! empty ( $result ))
			return true;
		else
			return false;
	
	}
	/**
	 * todo: get item by rid
	 */
	function checkTranslate($id, $language) {
		$data = self::getItemById ( $id );
		$referenId = $data [$this->reference_id];
		$this->db->select ( "*" );
		$this->db->from ( $this->table_name );
		$this->db->where ( $this->reference_id, ( int ) $referenId );
		$this->db->where ( 'language', $language );
		$query = $this->db->get ();
		//									    	echo $this->db->last_query();
		//									    	  exit;
		return $query->num_rows ();
	
	}
	function checkAllTranslate($id) {
		$arrLanguage = $this->config->item ( "lang_uri_abbr" );
		foreach ( $arrLanguage as $key => $value ) {
			if (! self::checkTranslate ( $id, $value ))
				return false;
		}
		return true;
	}
	function showCategoryItem($parent_id, $lang, &$strRow, &$k, $config) {
		
		$this->load->library ( "StringUtility" );
		$sql = "SELECT * FROM " . $this->table_name . " WHERE parents=" . $parent_id . " and language='$lang' ORDER BY parents"; //die($sql);
		$query = $this->db->query ( $sql );
		$result = $query->result_array ();
		if (count ( $result )) {
			foreach ( $result as $cate ) {
				$objString = new StringUtility ();
				$catName = $objString->removeunicode ( $cate ['name'] );
				$catName = str_replace ( ' ', "-", $catName ) . '.html';
				//check $menu have menu child
				$numChildMenu = self::_getNumItem ( array ('parents' => $cate ['id'] ) );
				if ($numChildMenu) {
					$strRow .= "<li><a href='" . $config ['base_url'] . 'category/' . $cate ['rid'] . '/' . $catName . "'>" . $cate ['name'] . "</a>";
					$k += 1;
					$strRow .= "<ul>";
					self::showCategoryItem ( $cate ["id"], $lang, $strRow, $k, $config );
					$strRow .= "</ul>";
					$strRow .= "</li>";
				} else {
					
					$strRow .= "<li><a href='" . $config ['base_url'] . 'category/' . $cate ['rid'] . '/' . $catName . "'>" . $cate ['name'] . "</a></li>";
					$k += 1;
					self::showCategoryItem ( $cate ["idCategory"], $lang, $strRow, $k, $config );
				}
			}
			return true;
		} else
			return true;
	}
	
	function getItemByRID($rid, $langCurrent, $langDefault) {
		$query = $this->db->get_where ( $this->table_name, array ("language" => $langCurrent, "rid" => $rid ) );
		//    	    			print($this->db->last_query());exit;
		

		if ($query->num_rows () > 0) {
			return $query->row_array ();
		} else {
			$query = $this->db->get_where ( $this->table_name, array ("language" => $langDefault, "rid" => $rid ) );
			return $query->row_array ();
		}
	
	}

}
