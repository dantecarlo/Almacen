<?php 

class Login extends AppModel {
	public $useTable = 'login';
    public $name = 'Login';
    protected $_schema = array(
	    'username' => array(
	        'type' => 'string',
	        'length' => 50
	    ),
	    'password' => array(
	        'type' => 'string',
	        'length' => 50
	    ),
	    'id_employee' => array(
	        'type' => 'integer',
	        'length' => 10
	    )
	);
}

class SessionKey extends AppModel {
	public $useTable = 'login';
	public $name = 'SessionKey';
	protected $_schema = array(
	    'id_employee' => array(
	        'type' => 'integer',
	        'length' => 10
	    ),
	    'session_key' => array(
	        'type' => 'string',
	        'length' => 50
	    )
	);
}