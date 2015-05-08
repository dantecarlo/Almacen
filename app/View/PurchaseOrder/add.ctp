<h1>Agregar orden</h1>
<?php
	echo $this->Form->create('PurchaseOrder');
	echo $this->Form->input('num_Factura', array('label' => 'Numero de Factura'));
	echo $this->Form->end('Guardar Orden');

?>