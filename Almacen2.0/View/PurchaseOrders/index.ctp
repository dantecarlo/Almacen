<div class="purchaseOrders index">
	<br><br><h2><?php echo __('Purchase Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><center><?php echo $this->Paginator->sort('product_id'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('provider_id'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('date'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('num_bill'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('id'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('num_po'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('modified'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('created'); ?></center></th>
			<th class="actions"><center><?php echo __('Actions'); ?></center></th>
	</tr>
	<?php
	foreach ($purchaseOrders as $purchaseOrder): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($purchaseOrder['Product']['name'], array('controller' => 'products', 'action' => 'view', $purchaseOrder['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($purchaseOrder['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $purchaseOrder['Provider']['id'])); ?>
		</td>
		<td><?php echo h($purchaseOrder['PurchaseOrder']['date']); ?>&nbsp;</td>
		<td><?php echo h($purchaseOrder['PurchaseOrder']['num_bill']); ?>&nbsp;</td>
		<td><?php echo h($purchaseOrder['PurchaseOrder']['id']); ?>&nbsp;</td>
		<td><?php echo h($purchaseOrder['PurchaseOrder']['num_po']); ?>&nbsp;</td>
		<td><?php echo h($purchaseOrder['PurchaseOrder']['modified']); ?>&nbsp;</td>
		<td><?php echo h($purchaseOrder['PurchaseOrder']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purchaseOrder['PurchaseOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchaseOrder['PurchaseOrder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchaseOrder['PurchaseOrder']['id']), null, __('Are you sure you want to delete # %s?', $purchaseOrder['PurchaseOrder']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<br>
<div class="col-md-4 mid-load">
	<div class="mid-content col-md1">
		<h5><span><?php echo $this->Html->link(__('+ New Purchase Order'), array('action' => 'add')); ?></span></h5>
	</div>
</div>



<!--div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Purchase Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
	</ul>
</div-->


