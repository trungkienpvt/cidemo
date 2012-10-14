<?php
class Model_Users extends CI_Model
{
	
	var $table_name = 'users';
	var $primaryKey = 'idUser';
	function __construct() {
	    parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
    }
	function getList ($select = "*",$page=0,$limit=0, $where = array())
    {
    	$data=array();
    	$this->db->select($select);
    	$this->db->from($this->table_name);
    	if(!empty($where ))
    	{
	    	foreach($where as $key=>$value)
	    	{
	    		$this->db->where($key,$value);	
	    	}
    	}
    	if($limit!=0)
    		$this->db->limit($limit,$page);
    	$query=$this->db->get();
       	foreach($query->result('array') as $row){
        	$data[]=$row;
        }
        return $data;
    }
    function getItemById($id)
    {
    	$query=$this->db->get_where($this->table_name,array($this->primaryKey => $id));
    	return $query->row_array();
    	
    }
    function getNumItem($where = array()) 
    {
    	$this->db->select('*');
    	$this->db->from($this->table_name);
    	if(!empty($where ))
    	{
	    	foreach($where as $key=>$value)
	    	{
	    		$this->db->where($key,$value);	
	    	}
    	}
    	$query = $this->db->get();
    	return $query->num_rows();
    }
	function login($username,$pass)
    {
    	$this->db->from('users');
		$this->db->join('aclroles', 'aclroles.id = users.roleid');
		$this->db->where('username', $username);
		$this->db->where('password', md5($pass));
		$query = $this->db->get();
    	$count= $query->num_rows();
    	$userInfo = $query->row_array();
    	$arrReturn = array();
		if($count>0) 
		{
			$arrReturn['status'] = true;
			$arrReturn['user_role'] = $userInfo['name'];
		}
		return $arrReturn;
    }
    function logout ($url)
    {
    	$this->session->set_userdata(array(
                'login_id' => false));
    	redirect($url);
    }
    
}
