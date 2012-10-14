<?php
class Model_Aclrole extends CI_Model
{
	var $table_name = 'aclroles';
	var $primaryKey = 'id';
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
//    	echo $this->db->last_query();  exit;
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
    
}
