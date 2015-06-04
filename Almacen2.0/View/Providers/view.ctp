<div class="providers view">
<h2><?php  echo __('Provider'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruc'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['ruc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Id'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['local_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provider'), array('action' => 'edit', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider'), array('action' => 'delete', $provider['Provider']['id']), null, __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?> </li>
	</ul>
</div>
