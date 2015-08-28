<?php
class UsersController extends AppController {
	var $name = 'Users';
	
	var $uses = array();
	
	var $helpers = array('Html', 'Form', 'Session');
	
	public $components = array('Session');
	
	public function beforeFilter() {
		parent::beforeFilter();
		
		if($this->Auth->user() && $this->action != 'admin_dashboard')
			$this->redirect($this->Auth->redirectUrl());
			
	}
	public function admin_login()
	{
		$this->layout = 'login';
		
		if ($this->request->is('post')) {
			$password = $this->Auth->password($this->request->data['User']['password']);
			$conditions = array("username" => $this->request->data['User']['username'], 'password' => $password, 'role' => 1);
			$res = $this->User->find('first', array('conditions' => $conditions));
			if(count($res) && $this->Auth->login($this->request->data['User'])) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(
				__('Username or password is incorrect')
			);
		}
	}
	
	public function admin_dashboard() {
		
		
		
	}
	
	public function admin_logout() {
		
		$this->Auth->logout();
		return $this->redirect($this->Auth->loginAction());
		
	}
	
}
?>
