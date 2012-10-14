<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Users extends Base_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'fullname',
                     'label'   => 'Fullname',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'username',
                     'label'   => 'Username',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email|is_unique[users.email]'
                  )
            );
		$this->form_validation->set_rules($config); 
		if ($this->form_validation->run() == FALSE)
			return false;
		else
			return true;
		
	}
	

	
		
}

