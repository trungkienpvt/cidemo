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
	public function rightHeader($arrConfig = array())
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
		return $data;
    }
    
    /**
     * Get menu item
     * @param $parent_id
     * @param $db
     * @param $table
     * @param $lang
     * @param $str
     */
    
    public function menuTop ($arrConfig = array())
    {
    	$this->load->library("StringUtility");
    	$objString = new StringUtility();
    	$arrConfig['obj_string'] = $objString;
    	$wheres = array();
		$wheres['language'] = $arrConfig['language'];
		$wheres['level <>'] = 0;
    	$objCategory = new Model_Category_Product();
    	$categoryList = $objCategory->_getList('*',0, 0, $wheres );
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
		return $data;
    	
    }
    public function menuLeft ($arrConfig)
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
		return $data;
    	
    	
    }
    /**
     * Get menu
     * @param unknown_type $db
     * @param unknown_type $table
     * @param unknown_type $lang
     */
    public function menuRight ($arrConfig)
    {
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/menuright", 
		$arrConfig, true);
		return $data;
    	
    	
        
    }
	public function header ($arrConfig)
    {
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/header", 
		$arrConfig, true);
		return $data;
    }
    
	public function headerTop ($arrConfig)
    {
    	$menuLang = self::rightHeader($arrConfig);
    	$arrConfig['menuLang'] = $menuLang;
    	$data = $this->load->view("templates/" . $arrConfig['template'] . "/headerTop", 
		$arrConfig, true);
		return $data;
    }
    
    
    /*
     * todo: generate banner
     */
    public function banner($arrConfig) {
    	$wheres= array();
    	$this->load->model('Model_Banner');
    	$model = new Model_Banner();
		$limitPerPage=$this->config->item('limit_of_page');
		$bannerList = $this->Model_Banner->getList('*',0,$limitPerPage, $wheres);
		return $bannerList;	
    	
    }
    
    /**
     * todo: get computer which access site
     * 
     */
    public function getComputerInfo($arrConfig) {
    	$this->load->library("my_utility");
    	$ip=$_SERVER['REMOTE_ADDR'];
		$myCountryName = $this->my_utility->GetCountryByIP($ip,PATH_ROOT . DS . 'data' . DS . 'files' . DS . 'ip-to-country.csv');
		$myCountryName = "";
		$arrConfig['user_info_title'] = $this->lang->line("USER_INFO_TITLE");
		$arrConfig['ip_computer'] = $ip;
		$arrConfig['contry_name'] = $myCountryName;
		$data = $this->load->view("templates/" . $arrConfig['template'] . "/computer-info", 
		$arrConfig, true);
		return $data;
		
    	
    }
    
}
?>