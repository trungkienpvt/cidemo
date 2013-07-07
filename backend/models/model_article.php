<?php
require_once "model_language.php";
class Model_Article extends Model_Language {
	
	var $table_name = 'products';
	var $primaryKey = 'id';
	function __construct() {
		parent::__construct ();
		$this->table_name = "article";
		$this->reference_id = "rid";
	}
	function getList($select = "*", $page = 0, $limit = 0, $where = array(), $wheresLike = array(), $order=array()) {
		$data = array ();
		$this->db->select ( $select );
		$this->db->from ( $this->table_name );
		$this->db->join ( 'category_article c', "c.id = $this->table_name.category", 'left' );
		if (! empty ( $where )) {
			foreach ( $where as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $wheresLike )) {
			$count = 1;
			foreach ( $wheresLike as $key => $value ) {
				if ($count == 1)
					$this->db->like ( $key, $value );
				else
					$this->db->or_like ( $key, $value );
			}
		}
		if ($limit != 0)
			$this->db->limit ( $limit, $page );
		if(!empty($order)){
			foreach($order as $key=>$value){
				$this->db->order_by($key, $value);
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
	function getItemById($id) {
		$query = $this->db->get_where ( $this->table_name, array ($this->primaryKey => $id ) );
		return $query->row_array ();
	
	}
	
	function getNumItem($where = array(), $wheresLike = array()) {
		$this->db->select ( '*' );
		$this->db->from ( $this->table_name );
		$this->db->join ( 'category_article c', "c.id = $this->table_name.category", 'left' );
		if (! empty ( $where )) {
			foreach ( $where as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $wheresLike )) {
			$count = 1;
			foreach ( $wheresLike as $key => $value ) {
				if ($count == 1)
					$this->db->like ( $key, $value );
				else
					$this->db->or_like ( $key, $value );
			}
		}
		$query = $this->db->get ();
//		print $this->db->last_query ();
//		exit ();
		
		return $query->num_rows ();
	}
	
	/**
	 * todo: get max rid by id
	 */
	function getMaxRID() {
		$this->db->select_max ( 'rid' );
		$this->db->from ( $this->table_name );
		$query = $this->db->get ();
		$arr = $query->row_array ();
		return $arr ['rid'];
	}
	/**
	 * todo: get item by rid
	 */
	function getItemByRID($rid, $langCurrent, $langDefault = "") {
		$query = $this->db->get_where ( $this->table_name, array ("language" => $langCurrent, "rid" => $rid ) );
		if ($query->num_rows () > 0) {
			return $query->row_array ();
		} elseif ($langDefault != "") {
			$query = $this->db->get_where ( $this->table_name, array ("language" => $langDefault, "rid" => $rid ) );
			return $query->row_array ();
		} else
			return NULL;
	
	}
	
	/**
	 * todo: search data
	 */
	function searchData($page = 0, $limit = 0, $arraySearch = array(), $wheres = array()) {
		$this->db->select ( '*' );
		$this->db->from ( $this->table_name );
		$this->db->join ( 'category_article c', "c.idCategory = $this->table_name.category", 'right' );
		if (! empty ( $wheres )) {
			foreach ( $wheres as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $arraySearch )) {
			foreach ( $arraySearch as $key => $value ) {
				if ($key == 0)
					$this->db->like ( 'name', $value );
				else
					$this->db->or_like ( 'name', $value );
			
			}
		}
		
		if ($limit != 0)
			$this->db->limit ( $limit, $page );
		$query = $this->db->get ();
		//    	print $this->db->last_query();exit;
		$data = array ();
		if (count ( $query )) {
			foreach ( $query->result ( 'array' ) as $row ) {
				$data [] = $row;
			}
		}
		return $data;
	
	}
	
	/**
	 * todo: get count search
	 */
	function countSearch($arraySearch = array(), $wheres = array()) {
		$this->db->select ( '*' );
		$this->db->from ( $this->table_name );
		$this->db->join ( 'category_article c', "c.idCategory = $this->table_name.category", 'right' );
		if (! empty ( $wheres )) {
			foreach ( $wheres as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $arraySearch )) {
			foreach ( $arraySearch as $key => $value ) {
				if ($key == 0)
					$this->db->like ( 'name', $value );
				else
					$this->db->or_like ( 'name', $value );
			
			}
		}
		
		$query = $this->db->get ();
		//    	print $this->db->last_query();exit;
		return $query->num_rows ();
	
	}
}
