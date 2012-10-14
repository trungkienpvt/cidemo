<?php 
class MMenu extends CI_Model{
function __construct(){
	// Call the Model constructor
	$this->load->database();
	parent::__construct();
}
/**
 * Get menu item
 * @param $parent_id
 * @param $db
 * @param $table
 * @param $lang
 * @param $str
 */
public function showMenuItem($parent_id="0",$table,$lang,&$str){
	
	$sql="SELECT * FROM $table WHERE idParent=".$parent_id." and language='$lang' ORDER BY idParent";	//die($sql);
	$menus = $this->db->query("$sql");
	if (count($menus))
	{
		foreach($menus->result() as $menu)
		{
			//check $menu have menu child
			$sql_2="SELECT * FROM $table WHERE idParent=".$menu->idMenu;
			$class_menu_item="";
			if($menu->idParent==0)
				$class_menu_item='@id_'.$menu->idMenu.'@';
			$query_2=$this->db->query("$sql_2");
			if($query_2->num_rows())
			{
				
				$str.="<li class='$class_menu_item'>
				<a class='parent' href='".$menu->url."'>".$menu->menuName."</a>";
				$str.="<ul>";
				self::showMenuItem($menu->idMenu,$table,$lang,$str);
				$str.="</ul></li>";
			}
			else
			{
				
				$str.="<li class='$class_menu_item'><a href='".$menu->url."'>".$menu->menuName."</a></li>";//continue;
				self::showMenuItem($menu->idMenu,$table,$lang,$str);
				
			
			}
		}
		return true;
	}
	else
		return true;
}
/**
 * Get menu
 * @param unknown_type $db
 * @param unknown_type $table
 * @param unknown_type $lang
 */
function showMenu($table,$lang='english')
{
	$str_menu_footer="";
	self::showMenuItem(0,$table,$lang,$str_menu_footer);
	return $str_menu_footer;
}

	    
}

?>