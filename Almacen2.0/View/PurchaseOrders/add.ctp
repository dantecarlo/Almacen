<br>
<div class="purchaseOrders form">
<?php echo $this->Form->create('PurchaseOrder'); ?>
	<fieldset>
		
		<legend><?php echo __('Add Purchase Order'); ?></legend>
		<br>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('provider_id');
		echo $this->Form->input('date');
		echo $this->Form->input('num_bill');
		echo $this->Form->input('num_po');
	?>
	</fieldset><br>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<br>
<br>
<div class="row">
<div class="col-md-4 mid-load">
	<div class="mid-content col-md1">
		<h5><span><?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index')); ?></span></h5>
		<h5><span><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?></span></h5>
		<h5><span><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?></span></h5>
	</div>
</div>
<div class="col-md-4 mid-load">
	<div class="mid-content col-md1">		
		<h5><span><?php echo $this->Html->link(__('+New Product'), array('controller' => 'products', 'action' => 'add')); ?></span></h5>
		<h5><span><?php echo $this->Html->link(__('+New Provider'), array('controller' => 'providers', 'action' => 'add')); ?></span></h5>
	</div>
</div>
</div>

