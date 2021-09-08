<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Model {

    // Declaration of a variables
    private $_userID;

    //Declaration of a methods
    public function setUserID($userID) {
        $this->_userID = $userID;
    }
    // get Notifications
    public function getNotifications() {
        return TRUE;
    }

}
