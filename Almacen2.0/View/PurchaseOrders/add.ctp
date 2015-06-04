<div class="purchaseOrders form">
<?php echo $this->Form->create('PurchaseOrder'); ?>
	<fieldset>
		<legend><?php echo __('Add Purchase Order'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('provider_id');
		echo $this->Form->input('date');
		echo $this->Form->input('num_bill');
		echo $this->Form->input('num_po');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
