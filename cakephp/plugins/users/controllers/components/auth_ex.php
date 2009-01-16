<?php
class AuthExComponent extends Object {
	
	var $name = 'AuthEx';
	var $components = array('Auth');
	
	function initialize() {
		$this->Auth->authorize = 'actions';
        $this->Auth->fields = array('username' => 'username', 'password' => 'password');
        //$this->Auth->loginAction = array('admin'=>false, 'controller'=>'users', 'action'=>'login', 'plugin'=>'users');
		$this->Auth->loginAction = '/users/login';
        $this->Auth->loginRedirect = '/users/logout';
        $this->Auth->logoutRedirect = array('admin'=>false, 'controller'=>'users', 'action'=>'login');
        $this->Auth->actionPath = 'controllers/';
	}
	
}
?>