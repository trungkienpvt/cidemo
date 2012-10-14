<?php
/**
 * @date			April 11, 2011
 *
 */
require_once(APPPATH.'libraries/front_controller.php');
class Googleapi extends Front_Controller
{
   	protected $adapter;
    protected $testUser		= "phantrungkien949@gmail.com";
    protected $testPass		= "googletk2";
    protected $testSpreadSheet	= "0AinLuOOgCpwWdE5JRjF5cEVwQWpreUJkWmpyRzFLRVE";
	public function __construct ()
    {
    	parent::__construct();
    	$this->load->helper('url');
    	$this->load->library('Zend');
    	$config = array();
    	$config['user'] = $this->testUser;
    	$config['pass'] = $this->testPass;
    	$config['spreadsheetId'] = $this->testSpreadSheet;
    	$config['worksheet'] = 'default';
    	$this->load->library('Google_Spreadsheet',$config);
    	
    }
    
    public function index()
    {
    	$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('googleapi', $lang);
        $dataRow = self::getrows();
		$this->load->library('mtemplate');
		$this->lang->load('googleapi', $lang);
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','googleapi_getrows.tpl',true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('data',$dataRow,true);
		$view->display('index.tpl');
    }

    public function getcolumns()
    {
    	$this->load->library('mtemplate');
		$this->_template=new MTemplate();
		$errorMessage=$this->getSessionError();
		$view=$this->_template->preView($errorMessage);
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','getcolumns.tpl',true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
    	$result=array();
        $message='';
        try
        {
    	    $result = $this->google_spreadsheet->getColumns();
        }catch(Exception $e)
        {
            $message = 'Caught exception: '.$e->getMessage();
        }
		$view->assign('data',$result,true);
		$view->display('index.tpl');
        
        
    }
    public function insertrow()
    {

        $result=array();
        $message='';
	    $testPayload = array();
	    try
	    {
            $testPayload[0]=array("firstname" =>"kien",'lastname' =>'phan','email'=>'phantrungkienvt@gmail.com');
            $testPayload[1]=array("firstname" =>"vu",'lastname' =>'le ngoc','email'=>'baoden_113@gmail.com');
            $testPayload[2]=array("firstname" =>"vu",'lastname' =>'do duc','email'=>'cshoangthienvu@gmail.com');
            $testPayload[3]=array("firstname" =>"han",'lastname' =>'to van','email'=>'cuncon@yahoo.com');
            $testPayload[4]=array("firstname" =>"ha",'lastname' =>'le thi','email'=>'anhnanghongsoichieuthaonguyenxanh@yahoo.com');
            foreach($testPayload as $row)
            {
        	    $this->google_spreadsheet->insertRow($row);
            }
            $message = "Insert row successful";
	    }catch(Exception $e)
        {
            $message = 'Caught exception: '.$e->getMessage();
        }

    }
    public function getrows()
    {
        $result=array();
        $message='';
        try
        {
            $result =  $this->google_spreadsheet->getRows();
            
              
        }catch(Exception $e)
        {
            $message = 'Caught exception: '. $e->getMessage();
        }
//        print_r($result);exit;
       return $result;
      
    }
    public function updaterow()
    {
        $this->login();
        $string='firstname="kien"';
        $result=array();
        $message='';
        try 
        {
            $listEntry=$this->google_spreadsheet->getListEntry($string);//print_r($listEntry);exit;
            $newRowData = array();
	        $newRowData=array("firstname" =>"kien",'lastname' =>'phan trung','email'=>'phantrungkien949@gmail.com');
            @$this->google_spreadsheet->updateRow($listEntry, $newRowData);
            $message = "Update row successful";
             
        
        } catch (Exception $e) {
            $message = 'Caught exception: '. $e->getMessage();
        }
//        $this->view->assign('message',$message);
//        $this->view->assign('result',$result);
        
    }
    public function deleterow()
    {
//        $this->_helper->layout()->disableLayout();
//        $this->_helper->viewRenderer->setNoRender(true);
        $this->login();
        $result=array();
        $message='';
        try
        {
            $listEntry=$this->google_spreadsheet->getListEntry('firstname="first name6055"');//print_r($listEntry);exit;
            $this->adapter->deleteRow($listEntry);
            $message = "Delete row successful";
        }catch(Exception $e) {
            $message = 'Caught exception: '. $e->getMessage();
        }
        $this->view->assign('message',$message);
        $this->view->assign('result',$result);
    }
    
    //get list document
    public function uploaddocument()
    {
		$this->zend->load('Zend/Gdata/Docs');
		$this->zend->load('Zend/Gdata/ClientLogin');        
        $service = Zend_Gdata_Docs::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient($this->testUser, $this->testPass, $service);
        $docs = new Zend_Gdata_Docs($client);
        if(!empty($_FILES['myfile']))
        {
	        $filenameParts = explode('.', $_FILES['myfile']['name']);
	        $fileExtension = end($filenameParts);
	        $mimeType = Zend_Gdata_Docs::lookupMimeType($fileExtension);
	        $newDocumentEntry = $docs->uploadFile($_FILES['myfile']['tmp_name'], $_FILES['myfile']['name'], $mimeType, Zend_Gdata_Docs::DOCUMENTS_LIST_FEED_URI);
	                
        }

		$this->load->library('mtemplate');
		$this->_template=new MTemplate();
		$errorMessage=$this->getSessionError();
		$view=$this->_template->preView($errorMessage);
		$view->assign('title_page',$this->lang->line('TITLE_PAGE'),true);
		$view->assign('layout_content','uploaddocument.tpl',true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->display('index.tpl');
        
    }
    //create new folder
    public function createnewfolder()
    {
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        $service = Zend_Gdata_Docs::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient($this->testUser, $this->testPass, $service);
        $docs = new Zend_Gdata_Docs($client);
        $docs->createFolder("new folder",'0BynLuOOgCpwWY2NlY2I0NGYtMjk1YS00ZjU5LTkzZmEtNzYyOWUxNjVlYzEz');
        
    }
    public function deletedocumentAction()
    {
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        $result=array();
        $message='';
        $service = Zend_Gdata_Docs::AUTH_SERVICE_NAME;
        $client = Zend_Gdata_ClientLogin::getHttpClient($this->testUser, $this->testPass, $service);
        $docs = new Zend_Gdata_Docs($client);
        $resourceId = "18gtxHpfDQ86am0mSbZcj3_fqNpujijReX0FxuSKQgMI";
        try{
        $file = $docs->getDoc($resourceId,'document');
        $file->delete();
        $message = 'Delete file successful';
        }catch(Exception $e) {
            $message = 'Caught exception: '. $e->getMessage();
        }
        echo $message;exit;
        
    }
    
}