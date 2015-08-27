<?php
/* This controller is used for Registration */

class UsersController extends AppController {
	var $name = 'Users';
	
	var $uses = array();
	
	var $helpers = array('Html', 'Form', 'Session');
	
	public $components = array('Session');
	
	public function admin_login()
	{
		$this->layout = 'login';
	}
	
}
?>
