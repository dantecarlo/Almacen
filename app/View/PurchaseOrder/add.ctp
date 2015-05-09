<div class = "add">	
	<?php echo $this->Form->create('PurchaseOrder'); ?>
		<fieldset>
			<legend> Agregar orden de compra </legend>
			<?php echo $this->Form->input('num_Factura', array('label' => 'Numero de Factura')); ?>
		</fieldset>

	<?php echo $this->Form->end('Guardar Orden'); ?>

</div>