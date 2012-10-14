<?php
class MBlock extends CI_Controller
{
    function __construct ()
    {
     
    }
    /**
     * generate right header
     */
    public function rightHeader()
    {
    	
    	$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('mblock', $lang);
    	$linkCurrent = $_SERVER['PHP_SELF'];
		$param1 = $this->uri->segment(1);
		die($param1);
		$arrReturn = array();
		$arrReturn[0]['image'] = '<img src="'. 'http://' .$_SERVER['HTTP_HOST'] . $linkCurrent . '"/>';
		if(isset($param1) && strlen($param1) == 2)
		{
			$arrReturn[0]['link'] = preg_replace('|(.+)ciapp/backend/(.+)|iUs',"$1ciapp/backend/en/$2",$linkCurrent);
			$arrReturn[1]['link'] = preg_replace('|(.+)ciapp/backend/(.+)|iUs',"$1ciapp/backend/vi/$2",$linkCurrent);
			
			
		}
        
        
        switch($language_abbr)
        {
        	case"en":
        		
        		$arrReturn[0]['class'] = 'active';
        		
        		$arrReturn[1]['class'] = '';
        		$arrReturn[1]['image'] = '';
        		break;
        	case"vn":
        		
        		$arrReturn[0]['class'] = '';
        		$arrReturn[0]['image'] = '';
        		$arrReturn[1]['class'] = '';
        		$arrReturn[1]['image'] = '';
        		break;
        	default:
        		
        		$arrReturn[0]['class'] = '';
        		$arrReturn[0]['image'] = '';
        		$arrReturn[1]['class'] = '';
        		$arrReturn[1]['image'] = '';
        		break;
        
        }
        return $arrReturn;
    }
    
    /**
     * Get menu item
     * @param $parent_id
     * @param $db
     * @param $table
     * @param $lang
     * @param $str
     */
    
    public function menuTop ()
    {
    	
    	
    }
    public function menuLeft ()
    {}
    /**
     * Get menu
     * @param unknown_type $db
     * @param unknown_type $table
     * @param unknown_type $lang
     */
    public function menuRight ()
    {
        
    }
    
}
?>