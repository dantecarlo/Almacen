<div class ="index">
	<h3>Listado de Ordenes de Compra</h3>
	<table>
		<tr>
			<tr>
				<th><?php echo $this -> Paginator -> sort('id_product', 'Id Producto') ?></th>
				<th><?php echo $this -> Paginator -> sort('id_provider', 'Id Provedor') ?></th>
				<th><?php echo $this -> Paginator -> sort('date', 'Fecha') ?></th>
				<th><?php echo $this -> Paginator -> sort('num_bill' , 'Numero de Factura') ?></th>
				<th><?php echo $this -> Paginator -> sort('id', 'Id') ?></th>
			</tr>
		</tr>
		<?php foreach ($Orden_de_compra as $k => $Orden_de_compra) :?>
		<tr>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['id_product']); ?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['id_provider']) ;?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['date']) ;?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['num_bill']) ;?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['id']) ;?></td>
		</tr>
	<?php endforeach;?>
	</table>

	<p>
		<?php echo $this -> Paginator -> counter(
			array('format' => 'Pagina {:page} de {:pages}, mostrando {:current} registros de {:count}'))
		 ?>

	</p>
	<div class = "paging">
		<?php echo $this -> Paginator -> prev('< anterior', array(), null, array('class' => 'prev disabled'));?>
		<?php echo $this -> Paginator -> numbers(array('separador' => '')) ?>
		<?php echo $this -> Paginator -> next('siguiente >' , array(), null, array('class' => 'next disabled')) ?>
	</div>
</div>
