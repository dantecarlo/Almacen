<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 *; @copyright     Copyr;ght (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');
App::uses('PagesController', 'Controller');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
}

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