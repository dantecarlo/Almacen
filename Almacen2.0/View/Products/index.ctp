<div class="products index">
	<br><br><h2><?php echo __('Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><center><?php echo $this->Paginator->sort('name'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('local_id'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('order_id'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('amount'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('id'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('modified'); ?></center></th>
			<th><center><?php echo $this->Paginator->sort('created'); ?></center></th>
			<th class="actions"><center><?php echo __('Actions'); ?></center></th>
	</tr>
	<?php
	foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['local_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['order_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['amount']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['modified']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
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
		<h5><span><?php echo $this->Html->link(__('+New Product'), array('action' => 'add')); ?></span></h5>
	</div>
</div>

