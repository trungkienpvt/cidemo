<?php
class Model_Category_Product extends CI_Model
{
	var $table_name = 'category_product';
	var $primaryKey = 'idCategory';
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
//        echo $this->db->last_query();  exit;
    	
    	return $query->num_rows();
    }
    
	function showCategoryItem($parent_id, $lang, &$strRow, &$k, $config)
	{
		
		$this->load->library("StringUtility");
		$sql="SELECT * FROM " .  $this->table_name . " WHERE idParent=".$parent_id." and language='$lang' ORDER BY idParent";	//die($sql);
		$query = $this->db->query($sql);
		$result = $query->result_array();
		if (count($result))
		{
			foreach($result as $cate)
			{
				$objString = new StringUtility();
				$catName = $objString->removeunicode($cate['catName']);
				$catName = str_replace(' ',"-",$catName).'.html';
				//check $menu have menu child
				$numChildMenu = self::getNumItem(array('idParent' =>$cate['idCategory']));
				if($numChildMenu)
				{
					$strRow .= "<li><a href='" . $config['base_url'] . 'category/' .  $cate['rid'] . '/' . $catName ."'>" . $cate['catName'] . "</a>";
					$k +=1;
					$strRow .= "<ul>";	
					self::showCategoryItem($cate["idCategory"], $lang, $strRow, $k, $config);
					$strRow .= "</ul>";
					$strRow .= "</li>";
				}
				else
				{
					
					$strRow .= "<li><a href='" . $config['base_url'] . 'category/' .  $cate['rid'] . '/' . $catName ."'>" . $cate['catName'] . "</a></li>";
					$k +=1;
				self::showCategoryItem($cate["idCategory"], $lang, $strRow,$k, $config);
				}
			}
			return true;
		}
		else
			return true;
	}
	
	/**
	 * check category exist category child
	 */
	public function isExistCategoryChild($idCat)
	{
		$sql="SELECT * FROM " .  $this->table_name . " WHERE idParent=".$idCat;
		$query = $this->db->query($sql);
		$result = $query->result_array();
		if(!empty($result))
			return true ;
		else
			return false;
		
	}
	
	/**
     * todo: get item by rid
     */
    function getItemByRID($rid, $langCurrent, $langDefault)
    {
    	$query=$this->db->get_where($this->table_name,array("language" => $langCurrent, "rid" =>$rid));
//    	    			print($this->db->last_query());exit;
    	
    	if($query->num_rows()>0){
    		return $query->row_array();
    	}
    	else{
    		$query=$this->db->get_where($this->table_name,array("language" => $langDefault, "rid" =>$rid));
    		return $query->row_array();
    	}
    		
    }
    
}
