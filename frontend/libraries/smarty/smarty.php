<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(APPPATH.'libraries/smarty/libs/Smarty.class.php');
 
class CI_Smarty extends Smarty {
 
    function __construct()
    {
        date_default_timezone_set('America/Phoenix');
 
        parent::__construct();
        $this->setTemplateDir(APPPATH.'views/templates');
        $this->setCompileDir(APPPATH.'views/compiled');
        $this->setConfigDir(APPPATH.'libraries/smarty/configs');
        $this->setCacheDir(APPPATH.'libraries/smarty/cache');
 
        $this->assign( 'APPPATH', APPPATH );
        $this->assign( 'BASEPATH', BASEPATH );
        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // Does something :)
        if ( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }
        $this->force_compile = 1;
        $this->caching = true;
        $this->cache_lifetime = 120;
 
        //log_message('debug', "Smarty Class Initialized");
    }
 
    function view($template_name) {
        if (strpos($template_name, '.') === FALSE && strpos($template_name, ':') === FALSE) {
            $template_name .= '.tpl';
        }
        parent::display($template_name);
    }
 
}