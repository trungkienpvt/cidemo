<?php
class Model_Users extends CI_Model
{
	
	function __construct() {
	    parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
    }
    function login($username,$pass)
    {
    	$query = $this->db->get_where('users', array('username' => $username, 'password' =>md5($pass)));
    	$result=$query->num_rows();
		if($result) 
		{
			return true;
		}
		else
			return false;
    }
    function logout ()
    {
    	$this->session->set_userdata(array(
                'login_id' => false));
    	redirect('users');
    }
    function viewUser ($page=0,$limit=0)
    {
    	$data=array();
        $point=$page;
        $query=$this->db->get_where('users',array(),$limit,$page);
       	foreach($query->result('array') as $row){
        	$data[]=$row;
        }
        return $data;
    }
    function getUserById($id)
    {
    	$query=$this->db->get_where('users',array('idUser' => $id));
    	return $query->row_array();
    	
    }
	function getUser($key, $value)
    {
    	$query=$this->db->get_where('users',array($key => $value));
    	return $query->row_array();
    	
    }
        
    function getNumUser() {
    	$query=$this->db->select("*");
    	$query = $this->db->get('users');
    	return $query->num_rows();
    }
    
}
