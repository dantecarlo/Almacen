<div class="purchaseOrders view">
<h2><?php  echo __('Purchase Order'); ?></h2>
	<dl>
		<dt><?php echo __('Product: '); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseOrder['Product']['name'], array('controller' => 'products', 'action' => 'view', $purchaseOrder['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($purchaseOrder['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $purchaseOrder['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($purchaseOrder['PurchaseOrder']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Bill'); ?></dt>
		<dd>
			<?php echo h($purchaseOrder['PurchaseOrder']['num_bill']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($purchaseOrder['PurchaseOrder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Po'); ?></dt>
		<dd>
			<?php echo h($purchaseOrder['PurchaseOrder']['num_po']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($purchaseOrder['PurchaseOrder']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($purchaseOrder['PurchaseOrder']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchase Order'), array('action' => 'edit', $purchaseOrder['PurchaseOrder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchase Order'), array('action' => 'delete', $purchaseOrder['PurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $purchaseOrder['PurchaseOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div>
