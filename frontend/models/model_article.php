<?php
class Model_Article extends CI_Model {
	
	var $table_name = 'article';
	var $primaryKey = 'id';
	function __construct() {
		parent::__construct ();
		$this->load->database ();
		$this->load->library ( 'pagination' );
	}
	function getList($select = "*", $page = 0, $limit = 0, $where = array(), $wheresLike = array(), $order = array()) {
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
	 * todo: get item by rid
	 */
	function getItemByRID($rid, $langCurrent, $langDefault = "") {
		$query = $this->db->get_where ( $this->table_name, array ("language" => $langCurrent, "rid" => (int)$rid ) );
		if ($query->num_rows () > 0) {
//			    		print($this->db->last_query());exit;
			return $query->row_array ();
		
		} elseif ($langDefault != "") {
			$query = $this->db->get_where ( $this->table_name, array ("language" => $langDefault, "rid" => $rid ) );
			return $query->row_array ();
		} else
			return NULL;
	
	}
	
	/**
	 * todo: get item by where condition
	 */
	function getItem($wheres) {
		$this->db->select ( '*' );
		$this->db->from ( $this->table_name );
		if (! empty ( $wheres )) {
			foreach ( $wheres as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		
		$query = $this->db->get ();
		//    	print($this->db->last_query());exit;
		return $query->row_array ();
	
	}

}
