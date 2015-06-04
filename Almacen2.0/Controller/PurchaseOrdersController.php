<?php
App::uses('AppController', 'Controller');
/**
 * PurchaseOrders Controller
 *
 * @property PurchaseOrder $PurchaseOrder
 */
class PurchaseOrdersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PurchaseOrder->recursive = 0;
		$this->set('purchaseOrders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PurchaseOrder->id = $id;
		if (!$this->PurchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$this->set('purchaseOrder', $this->PurchaseOrder->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PurchaseOrder->create();
			if ($this->PurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
		}
		$products = $this->PurchaseOrder->Product->find('list');
		$providers = $this->PurchaseOrder->Provider->find('list');
		$this->set(compact('products', 'providers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PurchaseOrder->id = $id;
		if (!$this->PurchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PurchaseOrder->read(null, $id);
		}
		$products = $this->PurchaseOrder->Product->find('list');
		$providers = $this->PurchaseOrder->Provider->find('list');
		$this->set(compact('products', 'providers'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PurchaseOrder->id = $id;
		if (!$this->PurchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		if ($this->PurchaseOrder->delete()) {
			$this->Session->setFlash(__('Purchase order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Purchase order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
