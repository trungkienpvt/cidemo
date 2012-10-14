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
    	return $query->num_rows();
    }
    
	function showCategoryItem($parent_id, $lang, &$strRow, &$k, $str, $config, $arrLang = array(), $langDefault = "english", $baseUrl)
	{
		$translate = $this->lang->line("TRANSLATE_STATUS");
		$translated = $this->lang->line("TRANSLATED_STATUS");
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
					
					$strRowTMP ="<tr >
					<td><input type='checkbox' onclick='isChecked(this);' name='id[]' id='c_".$k."' value='"
					.$cate['idCategory']."' /></td>   
				  <td >".$str.$cate['catName']."</td>
				  <td >".$cate['status']."</td>
				  <td ><img src ='" . ($cate['images']!= NULL?$config['imageUpload'] . "thumb/".$cate['images']:$config['imagePath'] . 'no-image.jpg') . "'/></td>
				  <td><input onkeypress='return submitEnter(event,this)' type='text' name='". $cate['idCategory'] ."' size='6' id='order_" . $cate['idCategory'] . "' value='". $cate['tab'] ."'/>
				  <input type='hidden' name='orderid[]'   value='". $cate['idCategory']."' />
				  <td >".$cate['language']."</td>";
				foreach($arrLang as $key=>$value){
						$rid = $cate['rid'];
						$dataTMP = self::getItemByRID($rid, $value);
						if(empty($dataTMP)) {
							$strRowTMP.="<td><a href='". $baseUrl ."category_product/add/id/" . $cate['idCategory']. "/translate/1/lang/". $value ."'>" . $translate . "</a></td>";
						}
						else {
							$strRowTMP.="<td>". $translated ."</td>";
						}
								
					}	
				$strRowTMP.="	
				  <td><a href='". $baseUrl ."category_product/add/id/" . $cate['idCategory'] . "'><img src='" . $config['imagepath'] . "images_admin/user_edit.png' alt='' title='' border= '0' /></a></td>
	              <td><a href='". $baseUrl ."category_product/delete/id/" . $cate['idCategory'] ."' class='ask'><img src='". $config['imagepath'] ."images_admin/trash.png' alt='' title='' border='0' /></a></td>
				 </tr>";
				$strRow[] = $strRowTMP;
					$str_new = $str."<span class='gi'>|&mdash;</span>";
					$k +=1;	
					self::showCategoryItem($cate["idCategory"], $lang, $strRow, $k, $str_new, $config, $arrLang, $langDefault, $baseUrl);
				}
				else
				{
					
					$strRowTMP ="<tr >
					<td><input type='checkbox' onclick='isChecked(this);' name='id[]' id='c_".$k."' value='".$cate['idCategory']."' /></td>   
				  <td >".$str.$cate['catName']."</td>
				  <td >".$cate['status']."</td>
				  <td ><img src ='" . ($cate['images']!= NULL?$config['imageUpload'] . "thumb/".$cate['images']:$config['imagepath'] . 'no-image.jpg')."'/></td>
				  <td><input onkeypress='return submitEnter(event,this)' type='text' name='". $cate['idCategory'] ."' size='6' id='order_" . $cate['idCategory'] . "' value='". $cate['tab'] ."'/>
				  <input type='hidden' name='orderid[]'   value='". $cate['idCategory']."' />
				  </td>	        
				  <td >".$cate['language']."</td>";
					foreach($arrLang as $key=>$value){
						$rid = $cate['rid'];
						$dataTMP = self::getItemByRID($rid, $value);
						if(empty($dataTMP)) {
							$strRowTMP.="<td><a href='". $baseUrl ."category_product/add/id/" . $cate['idCategory']. "/translate/1/lang/". $value ."'>" . $translate . "</a></td>";
						}
						else {
							$strRowTMP.="<td>". $translated ."</td>";
						}
								
					}	
				$strRowTMP.="	
				 <td><a href='". $baseUrl ."category_product/add/id/" . $cate['idCategory'] ."'><img src='" . $config['imagepath'] . "images_admin/user_edit.png' alt='' title = '' border = '0' /></a></td>
	             <td><a href='". $baseUrl ."category_product/delete/id/" . $cate['idCategory'] ."' class='ask'><img src='". $config['imagepath'] ."images_admin/trash.png' alt = '' title = '' border = '0' /></a></td>
				 </tr>";	
				$strRow[] = $strRowTMP;
					$k +=1;
				self::showCategoryItem($cate["idCategory"],$lang,$strRow,$k,$str, $config, $arrLang, $langDefault, $baseUrl);
					
				
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
//		print($this->db->last_query());exit;
		$result = $query->result_array();
		if(!empty($result))
			return true ;
		else
			return false;
		
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
    
    /**
     * todo: update order 
     */
    function updateOrder() {
    	
    
    }
    
}
