<?php
App::uses('AppModel', 'Model');
/**
 * PurchaseOrder Model
 *
 * @property Product $Product
 * @property Provider $Provider
 */
class PurchaseOrder extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'num_po';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provider' => array(
			'className' => 'Provider',
			'foreignKey' => 'provider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
