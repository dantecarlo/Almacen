<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<br>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
		<br><br>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('local_id');
		echo $this->Form->input('order_id');
		echo $this->Form->input('amount');
	?>
	</fieldset>
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

