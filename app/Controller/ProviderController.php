<?php
class ProviderController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Session');



	public function index(){
		$this -> Provider -> recursive = 0;
		$Provider = $this -> paginate();
		if($this->request->is('request')):
			return $Provider;
		else:
			$this->set('Provider', $Provider);
		endif;
	}


	public function add(){
		if($this->request->is('post')):
			if( $this->Provider->save($this->request->data) ):
				$this->Session->setFlash('Proveedor guardado');
				$this->redirect(array('action' => 'index'));
			endif;	
		endif;

	}



}