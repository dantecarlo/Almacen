<?php
class LoginController extends PagesController{

	//public $helpers = array('Html', 'Form');
	//public $components = array('Session');

	public $uses = array();
	public $useTable = 'login';

	public function displayLoginView() {
		//$this->redirect(array('action'=> 'login'));
		$this->render('login');
	}

	public function validateCredentials() {
		$this->loadModel('Login');

		$username = $this->request->data['username'];
		$password = $this->request->data['password'];

		$dbUserLogin = $this->Login->find('first', array(
	        'conditions' => array('Login.username' => $username)
	    ));

	    print_r( $dbUserLogin );

	    //$this->redirect(array('action'=> 'login'));
	    $this->render('login');

	}

}