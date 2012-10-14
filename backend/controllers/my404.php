<?php 
class my404 extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
    }

    public function index()
    {
    	
        $this->output->set_status_header('404');
        $this->load->library('mtemplate',array());
		$view=$this->mtemplate->loadAjax();
		$view->assign('title_page',$this->lang->line('PAGE_TITLE'),true);
		$view->display('error_404.tpl');
    }
}
