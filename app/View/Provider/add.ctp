<div class = "add">	
	<?php echo $this->Form->create('Provider'); ?>
		<fieldset>
			<legend> Agregar proveedor </legend>
			<?php echo $this->Form->input('name', array('label' => 'Nombre  del proveedor')); ?>
			<?php echo $this->Form->input('address', array('label' => 'Direccion')); ?>
			<?php echo $this->Form->input('ruc', array('label' => 'RUC')); ?>
		</fieldset>

	<?php echo $this->Form->end('Guardar Proveedor'); ?>
	
</div>