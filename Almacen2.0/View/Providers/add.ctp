<div class="providers form">
<?php echo $this->Form->create('Provider'); ?>
	<fieldset>
		<legend><?php echo __('Add Provider'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('adress');
		echo $this->Form->input('ruc');
		echo $this->Form->input('local_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?></li>
	</ul>
</div>
