<?php
class AdminBlock extends CI_Model
{
    function __construct ()
    {
        // Call the Model constructor
        $this->load->database();
        parent::__construct();
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
    {}
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