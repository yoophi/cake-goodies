<?php
class Group extends UsersAppModel {
	
    var $actsAs = array('Acl' => array('requester'));
    var $hasMany = array('Users.User');

    function parentNode() {
        return null;
    }

}
