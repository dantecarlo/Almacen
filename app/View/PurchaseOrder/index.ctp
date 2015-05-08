<h1>listado de estudiantes</h1>
<table>
	<tr>
		<th>Id Producto</th>
		<th>Id Provedor</th>
		<th>Fecha</th>
		<th>Numero de Factura</th>
		<th>Id</th>
	</tr>
<?php foreach ($Orden_de_compra as $k => $Orden_de_compra) :?>
	<tr>
		<td><?php echo $Orden_de_compra['PurchaseOrder']['id_Product'] ;?></td>
		<td><?php echo $Orden_de_compra['PurchaseOrder']['id_Provedor'] ;?></td>
		<td><?php echo $Orden_de_compra['PurchaseOrder']['date'] ;?></td>
		<td><?php echo $Orden_de_compra['PurchaseOrder']['num_Factura'] ;?></td>
		<td><?php echo $Orden_de_compra['PurchaseOrder']['id'] ;?></td>
	</tr>
	<?php endforeach;?>
</table>

