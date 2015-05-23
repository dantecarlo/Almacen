<?php
class ProductController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index(){
		//$this->set('Orden_de_compra', $this->PurchaseOrder->find('all'));
		$this -> Product -> recursive = 0;
		$this-> set('Product', $this -> paginate());
	}

	public function add(){
		if($this->request->is('post')):
			if( $this->Product->save($this->request->data) ):
				$this->Session->setFlash('Producto guardado');
				$this->redirect(array('action' => 'index'));
			endif;	
		endif;

	}

}