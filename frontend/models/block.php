<?php
class Block extends CI_Model
{
    function __construct ()
    {
        // Call the Model constructor
        $this->load->database();
        parent::__construct();


        
    }
    /**
     * generate right header
     */
	public function rightHeader($arrConfig = array(), &$smarty = null)
    {
    	if($this->config->item('index_page')=="") {
    		$basePath = $arrConfig['basePath']; 
    	}else {
    		$basePath = $arrConfig['basePath'] .'index.php/';
    		
    		
    	}
    	$linkCurrent = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//    	die($linkCurrent);
		$arrReturn = array();
		$arrReturn[0]['image_link'] = 'flag_en.png';
		$arrReturn[1]['image_link'] = 'flag_vi.png';
		if($arrConfig['language_abbr'] != "")
		{
			
			$arrReturn[0]['link'] = preg_replace('|' . $basePath. '(\w{2})(.+)|iUs', $basePath. "en$2",$linkCurrent);
			$arrReturn[1]['link'] = preg_replace('|' . $basePath. '(\w{2})(.+)|iUs',$basePath. "vi$2",$linkCurrent);
			
		}
		else 
		{

			$arrReturn[0]['link'] = preg_replace('|' . $basePath. '(.*)|iUs', $basePath."en/$1",$linkCurrent);
			$arrReturn[1]['link'] = preg_replace('|' . $basePath.'(.*)|iUs', $basePath. "vi/$1",$linkCurrent);
		
		}
        switch($arrConfig['language_abbr'])
        {
        	case"en":
        		
        		$arrReturn[0]['class'] = 'hidden';
        		$arrReturn[1]['class'] = '';
        		break;
        	case"vi":
        		$arrReturn[0]['class'] = '';
        		$arrReturn[1]['class'] = 'hidden';
        		break;
        	default:
        		$arrReturn[0]['class'] = 'hidden';
        		$arrReturn[1]['class'] = '';
        		break;
        
        }
        $arrConfig['data'] = $arrReturn;
        $data = $this->load->view("templates/" . $arrConfig['template'] . "/right_header", 
		$arrConfig, true);
		if($smarty!=null)
			$smarty->assign("RIGHT_HEADER",$data,true);
    }
    
    /**
     * Get menu item
     * @param $parent_id
     * @param $db
     * @param $table
     * @param $lang
     * @param $str
     */
    
    public function menuTop ($arrConfig = array(), &$smarty = null)
    {
    	$this->load->library("StringUtility");
    	$objString = new StringUtility();
    	$arrConfig['obj_string'] = $objString;
    	$wheres = array();
		$wheres['language'] = $arrConfig['language'];
    	$objCategory = new Model_Category_Product();
    	$categoryList = $objCategory->getList('*',0, 0, $wheres );
    	$arrConfig['data'] = $categoryList;
    	$classVideoList = '';
		$classUserInfo = '';
		$classPlayVideo = '';
		$classProduct = '';
    	switch($arrConfig['activeLink']){
			case "playvideo": $classPlayVideo = "selected";break;
			case "getuserinfo": $classUserInfo = "selected";break;
			case "product": $classProduct = "selected";break;
			case "index": $classVideoList = "selected";break;
			default: $classPlayVideo="selected";break;
		}
		$arrClassLink=array('classVideoList' => $classVideoList, 'classUserInfo' => $classUserInfo, 
		'classPlayVideo' =>$classPlayVideo, 'classProduct' => $classProduct );
//    	$this->load->library('view');
		$arrConfig['arrClassLink'] = $arrClassLink;
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/menutop", 
		$arrConfig, true);
		if($smarty!=null)
			$smarty->assign("MENU_TOP",$data,true);
    	
    }
    public function menuLeft ($arrConfig, &$smarty = null)
    {
    	
    	$wheres = array();
		$wheres['language'] = $arrConfig['language'];
    	$strRow = '';
		$objCategory = new Model_Category_Product();
		$k = 1;
		$strRow = '';
		$objCategory->showCategoryItem(0, $arrConfig['language'], $strRow, $k, $arrConfig);
    	$arrData = array();
    	$arrData['data'] = $strRow;
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/menuleft", 
		$arrData, true);
		if($smarty!=null)
			$smarty->assign("LEFT_CONTENT",$data,true);
    	
    	
    }
    /**
     * Get menu
     * @param unknown_type $db
     * @param unknown_type $table
     * @param unknown_type $lang
     */
    public function menuRight ($arrConfig, &$smarty = null)
    {
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/menuright", 
		$arrConfig, true);
		if($smarty!=null)
			$smarty->assign("MENU_RIGHT",$data,true);
    	
    	
        
    }
    
    
    /*
     * todo: generate banner
     */
    public function banner($arrConfig, &$smarty = null) {
    	$wheres= array();
    	$this->load->model('Model_Banners');
    	$model = new Model_Banners();
		$limitPerPage=$this->config->item('limit_of_page');
		$bannerList = $this->Model_Banners->getList('*',0,$limitPerPage, $wheres);
		if($smarty!=null)
			$smarty->assign("BANNER_LIST",$bannerList,true);
		return $bannerList;	
    	
    }
    
    /**
     * todo: get computer which access site
     * 
     */
    public function getComputerInfo($arrConfig, &$smarty = null) {
    	$this->load->library("my_utility");
    	$ip=$_SERVER['REMOTE_ADDR'];
		$myCountryName = $this->my_utility->GetCountryByIP($ip,PATH_ROOT . DS . 'data' . DS . 'files' . DS . 'ip-to-country.csv');
		$myCountryName = "";
		$arrConfig['user_info_title'] = $this->lang->line("USER_INFO_TITLE");
		$arrConfig['ip_computer'] = $ip;
		$arrConfig['contry_name'] = $myCountryName;
		$data = $this->load->view("templates/" . $arrConfig['template'] . "/computer-info", 
		$arrConfig, true);
		if($smarty!=null)
			$smarty->assign("COMPUTER_INFO",$data,true);
		
    	
    }
    
}
?>