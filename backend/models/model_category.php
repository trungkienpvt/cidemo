<?php
class Model_Category extends CI_Model
{
	var $table_name = 'category';
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
    	$this->db->join('category_type ct', "ct.id = $this->table_name.category_type", 'left');
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
    
	function showCategoryItem($parent_id, $lang, &$strRow, &$k, $str, $config)
	{
		$sql="SELECT * FROM " .  $this->table_name . " WHERE idParent=".$parent_id." and language='$lang' ORDER BY idParent";	//die($sql);
		$query = $this->db->query($sql);
		$result = $query->result_array();
		if (count($result))
		{
			foreach($result as $cate)
			{
				//check $menu have menu child
				$numChildMenu = self::getNumItem(array('idParent' =>$cate['idCategory']));
				if($numChildMenu)
				{
					$strRow[]="<tr >
					<td><input type='checkbox' onclick='isChecked(this);' name='cid[]' id='c_".$k."' value='"
					.$cate['idCategory']."' /></td>   
				  <td >".$str.$cate['catName']."</td>
				  <td >".$cate['status']."</td>
				  <td >".$cate['language']."</td>
				  <td><a href='category/add/id/" . $cate['idCategory'] . "'><img src='" . $config['imagepath'] . "images_admin/user_edit.png' alt='' title='' border= '0' /></a></td>
	              <td><a href='category/delete/id/" . $cate['idCategory'] ."' class='ask'><img src='". $config['imagepath'] ."images_admin/trash.png' alt='' title='' border='0' /></a></td>
				 </tr>";
					$str_new = $str."<span class='gi'>|&mdash;</span>";
					$k +=1;	
					self::showCategoryItem($cate["idCategory"], $lang, $strRow, $k, $str_new, $config);
				}
				else
				{
					
					$strRow[]="<tr> 
					<td><input type='checkbox' onclick='isChecked(this);' name='cid[]' id='c_".$k."' value='".$cate['idCategory']."' /></td>   
				  <td >".$str.$cate['catName']."</td>
				  <td >".$cate['status']."</td>
				  <td >".$cate['language']."</td>
				 <td><a href='category/add/id/" . $cate['idCategory'] ."'><img src='" . $config['imagepath'] . "images_admin/user_edit.png' alt='' title = '' border = '0' /></a></td>
	             <td><a href='category/delete/id/" . $cate['idCategory'] ."' class='ask'><img src='". $config['imagepath'] ."images_admin/trash.png' alt = '' title = '' border = '0' /></a></td>
				 </tr>";	
					$k +=1;
				self::showCategoryItem($cate["idCategory"],$lang,$strRow,$k,$str, $config);
					
				
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
    
}
