<?php
class Model_Users extends CI_Model {
	
	var $table_name = 'users';
	var $primaryKey = 'id';
	function __construct() {
		parent::__construct ();
		$this->load->database ();
		$this->load->library ( 'pagination' );
	}
	function getList($select = "*", $page = 0, $limit = 0, $where = array(), $whereLike = array()) {
		$data = array ();
		$this->db->select ( $select );
		$this->db->from ( $this->table_name );
		if (! empty ( $where )) {
			foreach ( $where as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $whereLike )) {
			$count = 1;
			foreach ( $whereLike as $key => $value ) {
				if ($count == 1)
					$this->db->like ( $key, $value );
				else
					$this->db->or_like ( $key, $value );
				$count ++;
			}
		}
		if ($limit != 0)
			$this->db->limit ( $limit, $page );
		$query = $this->db->get ();
		foreach ( $query->result ( 'array' ) as $row ) {
			$data [] = $row;
		}
		return $data;
	}
	function getItemById($id) {
		$query = $this->db->get_where ( $this->table_name, array ($this->primaryKey => $id ) );
		return $query->row_array ();
	
	}
	function getNumItem($where = array(), $whereLike) {
		$this->db->select ( '*' );
		$this->db->from ( $this->table_name );
		if (! empty ( $where )) {
			foreach ( $where as $key => $value ) {
				$this->db->where ( $key, $value );
			}
		}
		if (! empty ( $whereLike )) {
			$count = 1;
			foreach ( $whereLike as $key => $value ) {
				if ($count == 1)
					$this->db->like ( $key, $value );
				else
					$this->db->or_like ( $key, $value );
				$count ++;
			}
		}
		$query = $this->db->get ();
		return $query->num_rows ();
	}
	function login($username, $pass) {
		$this->db->from ( 'users' );
		//		$this->db->join('aclroles', 'aclroles.id = users.roleid');
		$this->db->where ( 'username', $username );
		$this->db->where ( 'password', md5 ( $pass ) );
		$query = $this->db->get ();
		$count = $query->num_rows ();
		$userInfo = $query->row_array ();
		$arrReturn = array ();
		if ($count > 0) {
			$arrReturn ['status'] = true;
			$arrReturn ['user_role'] = $userInfo ['name'];
		}
		return $arrReturn;
	}
	function logout($url) {
		$this->session->set_userdata ( array ('login_id' => false ) );
		redirect ( $url );
	}

}
