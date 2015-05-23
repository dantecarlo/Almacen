<div class = "add">	
	<?php echo $this->Form->create('Product'); ?>
		<fieldset>
			<legend> Agregar proveedor </legend>
			<?php echo $this->Form->input('name', array('label' => 'Nombre  del producto')); ?>
			<?php echo $this->Form->input('id_local', array('label' => 'Local')); ?>
			<?php echo $this->Form->input('amount', array('label' => 'Amount')); ?>
		</fieldset>

	<?php echo $this->Form->end('Guardar Proveedor'); ?>

</div>