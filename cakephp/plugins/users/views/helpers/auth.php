<?php
class AuthHelper extends AppHelper {

    var $helpers = array('Session', 'Html');
    var $sessionKey = 'Auth.User';

    function user($key = null) {
        if(!empty($key)) {
            return $this->Session->read($this->sessionKey.'.'.$key);
        } else {
	        return $this->Session->read($this->sessionKey);
        }
    }

    function isAuthorized() {
	    $user_id = $this->user('id');
	    return !empty($user_id);
    }

	function loginLink($link_text = 'login') {
		return $this->Html->link($link_text, '/users/login');
	}
	
	function logoutLink($link_text = 'logout') {
		return $this->Html->link($link_text, '/users/logout');
	}

}
?>