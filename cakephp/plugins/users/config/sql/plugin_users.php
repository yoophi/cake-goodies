<?php 
class PluginUsersSchema extends CakeSchema {
	var $name = 'PluginUsers';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $users = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'group_id' => array('type' => 'integer', 'null' => false),
			'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
			'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
			'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 128),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
	var $groups = array(
			'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type' => 'string', 'null' => false, 'length' => 100),
			'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
			'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
		);
}
?>
