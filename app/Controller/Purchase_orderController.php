<?php
class Purchase_orderController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index(){
		$this->set('Orden_de_compra', $this->Purchase_order->find('all'));
	}

	public function add(){
		if($this->request->is('post')):
			if( $this->PurchaseOrder->save($this->request->data) ):
				$this->Session->setFlash('Orden guardada');
				$this->redirect(array('action' => 'index'));
			endif;	
		endif;

	}

}