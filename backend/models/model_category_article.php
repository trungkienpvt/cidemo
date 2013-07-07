<?php
require_once "nested_set.php";
class Model_Category_Article extends Nested_Set {
	public $reference_id = null;
	public $primaryKey = null;
	function __construct() {
		parent::__construct ();
		$this->_table = "category_article";
		$this->reference_id = "rid";
		$this->primaryKey = 'id';
	}
	/**
	 * Todo: get list object
	 * @param type $select
	 * @param type $page
	 * @param type $limit
	 * @param type $where
	 * @param type $whereLike
	 * @return type
	 */
	function _getList($select = "*", $page = 0, $limit = 0, $where = array(), $whereLike = array(), $order = array(), $language = '') {
		$data = array ();
		$this->db->select ( $select );
		$this->db->from ( $this->_table );
		if (! empty ( $where )) {
			foreach ( $where as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $whereLike )) {
			$count = 1;
			foreach ( $whereLike as $key => $value ) {
				if ($count != 1)
					$this->db->or_like ( $key, $value );
				else {
					$this->db->like ( $key, $value );
				}
				$count ++;
			}
		}
		if ($limit != 0)
			$this->db->limit ( $limit, $page );
		if (! empty ( $order )) {
			foreach ( $order as $key => $value ) {
				$this->db->order_by ( $key, $value );
			}
		}
		$query = $this->db->get ();
//				print $this->db->last_query ();
//				exit ();
		foreach ( $query->result ( 'array' ) as $row ) {
			$data [] = $row;
		}
		
		return $data;
	}
	
	/**
	 * Todo: get data by id
	 * @param type $id
	 * @return type
	 */
	function _getItemById($id) {
		$this->db->select ( "*" );
		$this->db->from ( $this->_table );
		$this->db->where ( $this->primaryKey, ( int ) $id );
		$query = $this->db->get ();
		//		        		    	echo $this->db->last_query(	);  exit;
		

		return $query->row_array ();
	}
	
	/**
	 * Todo: count item for pagination
	 * @param type $where
	 * @param type $whereLike
	 * @return type
	 */
	function _getNumItem($where = array(), $whereLike = array()) {
		$this->db->select ( '*' );
		$this->db->from ( $this->_table );
		if (! empty ( $whereLike )) {
			$count = 1;
			foreach ( $whereLike as $key => $value ) {
				if ($count != 1)
					$this->db->or_like ( $key, $value );
				else {
					$this->db->like ( $key, $value );
				}
				$count ++;
			}
		}
		$query = $this->db->get ();
		return $query->num_rows ();
	}
	
	/**
	 * Todo: delete item
	 * @param type $id
	 */
	function _delete($language, $id) {
		
		if ($language == "" || $language == $this->languageDefault) {
			if (is_array ( $id )) {
				foreach ( $id as $item ) {
					//delete data for table language
					$this->db->where ( $this->primaryKey, $item );
					$this->db->delete ( $this->table_language );
					//delete data for table default
					

					$this->db->where ( $this->primaryKey, $item );
					$this->db->delete ( $this->table_language );
				}
			} else {
				$this->db->set ( $this->fieldDeleted, 1 );
				$this->db->where ( $this->primaryKey, $id );
				if (self::_checkExistTranslate ( $id )) {
					$this->db->update ( $this->_table );
				} else {
					$this->db->delete ( $this->_table );
				}
			}
		} else {
			$this->db->from ( $this->table_language );
		}
		if (is_array ( $id ))
			$this->db->where ( $this->primaryKey, $id );
		else
			$this->db->where_in ( $this->primaryKey, $id );
		$this->db->delete ( $this->_table );
	}
	
	function _save($data = array(), $id = 0, $referenceId = 0) {
		try {
			$tableName = $this->_table;
			if ($id != 0) {
				//				var_dump($data);exit;
				//case to edit data
				$this->updateNode ( $data, $id, ( int ) $data ['parents'] );
				//				            	echo $this->db->last_query(	);  exit;
				return $id;
			} elseif ($referenceId != 0) {
				//case to translate data
				$this->_parent = ( int ) $data ['parents'];
				$this->insertNode ( $data, ( int ) $data ['parents'], array ('position' => 'left' ) );
				return $this->db->insert_id ();
			} elseif(isset($data ['parents']) && $data['parents']!=0) {
				$this->insertNode ( $data, ( int ) $data ['parents'], array ('position' => 'left' ) );
				$insertId = $this->db->insert_id ();
				$this->db->set ( $this->reference_id, $insertId );
				$this->db->where ( $this->primaryKey, $insertId );
				$this->db->update ( $this->_table );
				return $insertId;
			}else{
				$this->insertNode ( $data );
				$insertId = $this->db->insert_id ();	
				$this->db->set ( $this->reference_id, $insertId );
				$this->db->where ( $this->primaryKey, $insertId );
				$this->db->update ( $this->_table );
				return $insertId;
			}
		} catch ( Exception $e ) {
			return false;
		}
	}
	/**
	 * Todo: check item exist in table translating or no
	 * @param type $id
	 * @return type
	 */
	function _checkExistTranslate($id) {
		$this->db->select ( "*" );
		$this->db->from ( $this->_table );
		$this->db->where ( $this->reference_id, $id );
		$query = $this->db->get ();
		return $query->num_rows ();
	}
	/**
	 * Todo: change parent of item
	 * @param $language
	 * @param $oldParent
	 * @param $newParent
	 */
	
	/**
	 * todo: get item by rid
	 */
	function _checkTranslate($id, $language) {
		$data = self::_getItemById ( $id );
		$referenId = $data [$this->reference_id];
		$this->db->select ( "*" );
		$this->db->from ( $this->_table );
		$this->db->where ( $this->reference_id, ( int ) $referenId );
		$this->db->where ( 'language', $language );
		$query = $this->db->get ();
		//									    	echo $this->db->last_query();
		//									    	  exit;
		return $query->num_rows ();
	
	}
	
	/**
	 * todo: check exist translate by language
	 */
	function _checkTranslate2($id, $language) {
		$data = self::_getItemById ( $id );
		$referenId = $data [$this->reference_id];
		$this->db->select ( "*" );
		$this->db->from ( $this->_table );
		$this->db->where ( $this->reference_id, ( int ) $referenId );
		$this->db->where ( 'language <>', $language );
		$query = $this->db->get ();
		//									    	echo $this->db->last_query();
		//									    	  exit;
		return $query->num_rows ();
	
	}
	
	function _checkAllTranslate($id) {
		$arrLanguage = $this->config->item ( "lang_uri_abbr" );
		foreach ( $arrLanguage as $key => $value ) {
			if (! self::_checkTranslate ( $id, $value ))
				return false;
		}
		return true;
	}
	
	/**
	 * check category exist category child
	 */
	function getChildCategory($id) {
		$this->db->select ( '*' );
		$table = $this->_table;
		$this->db->from ( $table );
		$this->db->where ( "parents", ( int ) $id );
		$query = $this->db->get ();
//						print($this->db->last_query());exit;
		$result = $query->result_array ();
		if (! empty ( $result ))
			return true;
		else
			return false;
	
	}
	

}

