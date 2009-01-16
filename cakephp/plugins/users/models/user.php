<?php
class User extends UsersAppModel {

	var $name = 'User';
    var $belongsTo = array('Users.Group');
    var $actsAs = array('Acl' => array('requester'));

    function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }

        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (!$data['User']['group_id']) {
            return null;
        } else {
            return array('Group'=>array('id'=>$data['User']['group_id']));
        }
    }

}
?>