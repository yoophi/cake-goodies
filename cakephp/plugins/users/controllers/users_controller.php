<?php
class UsersController extends UsersAppController {
	
	var $name = 'Users';
	var $uses = array('Users.User');
	
    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allowedActions = array('login', 'logout', 'register');
    }

    function login() {
	}

    function logout() {
        $this->redirect($this->Auth->logout());
    }

    function register() {
        if ($this->data) {
            if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                $this->data['User']['group_id'] = 3; //user
                $this->User->create();
                if ($this->User->save($this->data)) {
                    $this->Session->setFlash('User regitered.');
                    $this->redirect(array('action'=>'login'));
                }
            }
        }
    }

	function account() {}
	
}
?>