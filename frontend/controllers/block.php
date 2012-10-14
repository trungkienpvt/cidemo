<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
class block extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -  
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function menutop ()
    {
        $this->lang->load('article', 'english');
        $data = array();
        $this->load->model('Model_Article');
        $this->load->library('mtemplate');
        $this->load->library('my_utility');
        $convertVN = new My_Utility();
        $this->_template = new MTemplate();
        $view = $this->_template->preView();
        $view->display('index.tpl');
    }
    public function menuleft ()
    {
        $layout = 'article';
        $this->load->model('Model_Article');
        $data = $this->ModelArticle->Detail();
        self::loadViewCustom('default', $layout, $data);
    }
    public function menuright()
    {
    	
    }
}

