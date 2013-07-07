<?php 
class my404 extends CI_Controller {
//    public function __construct()
//    {
//            parent::__construct();
//    }

    public function index()
    {
    	$this->load->library('session');
    	$defaultLang= $this->config->item("language");
		$arrLang = $this->config->item('lang_uri_abbr');
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$preData = $this->mtemplate->getData();
		$data = array();
		$data['PREDATA'] = $preData;
        $this->output->set_status_header('404');
        $this->load->view("templates/" . $this->mtemplate->_template . "/error_404", 
		$data);
		
    }
}
