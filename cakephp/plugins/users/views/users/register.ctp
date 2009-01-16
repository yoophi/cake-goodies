<h2>Register</h2>
<?php
echo $form->create('User', array('action' => 'register'));
echo $form->input('username');
echo $form->input('password', array('type'=>'password'));
echo $form->input('password_confirm', array('type'=>'password'));
echo $form->end('Register');
?>
