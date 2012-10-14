<?php
class Model_Article extends CI_Model
{
	
	var $table_name = 'article';
	var $primaryKey = 'idArticle';
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
    	$this->db->join('category_article c', "c.idCategory = $this->table_name.idCategory", 'left');
    	if(!empty($where ))
    	{
	    	foreach($where as $key=>$value)
	    	{
	    		$this->db->where($key,$value);	
	    	}
    	}
    	if($limit!=0)
    		$this->db->limit($limit, $page);
    	$query=$this->db->get();
//    	    			print($this->db->last_query());exit;
    	
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
    	$this->db->join('category_article c', "c.idCategory = $this->table_name.idCategory", 'left');
    	if(!empty($where ))
    	{
	    	foreach($where as $key=>$value)
	    	{
	    		$this->db->where($key,$value);	
	    	}
    	}
    	$query = $this->db->get();
//    	    			print($this->db->last_query());exit;
    	return $query->num_rows();
    }
    
    /**
     * todo: get max rid by id
     */
    function getMaxRID()
    {
    	$this->db->select_max('rid');
    	$this->db->from($this->table_name);
    	$query = $this->db->get();
    	$arr = $query->row_array();
		return $arr['rid'];
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
       
    
}
