<div class ="index">
	<h3>Listado de Ordenes de Compra</h3>
	<table>
		<tr>
			<tr>
				<th><?php echo $this -> Paginator -> sort('id_Product', 'Id Producto') ?></th>
				<th><?php echo $this -> Paginator -> sort('id_provider', 'Id Provedor') ?></th>
				<th><?php echo $this -> Paginator -> sort('date', 'Fecha') ?></th>
				<th><?php echo $this -> Paginator -> sort('num_bill' , 'Numero de Factura') ?></th>
				<th><?php echo $this -> Paginator -> sort('id', 'Id') ?></th>
			</tr>
		</tr>
		<?php foreach ($Orden_de_compra as $k => $Orden_de_compra) :?>
		<tr>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['id_Product']); ?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['id_provider']) ;?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['date']) ;?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['num_bill']) ;?></td>
			<td><?php echo h($Orden_de_compra['PurchaseOrder']['id']) ;?></td>
		</tr>
	<?php endforeach;?>
	</table>
</div>
