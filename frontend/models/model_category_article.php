<?php
class Model_Category_Article extends CI_Model
{
	var $table_name = 'category_article';
	var $primaryKey = 'idCategory';
	function __construct() {
	    parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
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
    
	
	/**
     * todo: get item by rid
     */
    function getItemByRID($rid, $langCurrent, $langDefault = "")
    {
    	$query=$this->db->get_where($this->table_name,array("language" => $langCurrent, "rid" =>$rid));
    	if($query->num_rows()>0){
    		return $query->row_array();
    	}
    	elseif($langDefault!="") {
    		$query=$this->db->get_where($this->table_name,array("language" => $langDefault, "rid" =>$rid));
    		return $query->row_array();
    	}
    	else 	
    		return NULL;
    		
    }
    
    /**
     * todo: get item by where condition
     */
    function getItem($wheres)
    {
    	$this->db->select('*');
    	$this->db->from($this->table_name);
    	if(!empty($wheres ))
    	{
	    	foreach($wheres as $key=>$value)
	    	{
	    		$this->db->where($key,$value);	
	    	}
    	}
    	    			
    	$query = $this->db->get();
//    	print($this->db->last_query());exit;
    	return $query->row_array();
    
    	
    }
}
