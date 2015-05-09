<div class ="index">
	<h3>Listado de Proveedores</h3>
	<table>
		<tr>
			<tr>
				<th><?php echo $this -> Paginator -> sort('name', 'Name') ?></th>
				<th><?php echo $this -> Paginator -> sort('address', 'Address') ?></th>
				<th><?php echo $this -> Paginator -> sort('ruc', 'Fecha') ?></th>
			</tr>
		</tr>
		<?php foreach ($Provider as $k => $Provider) :?>
		<tr>
			<td><?php echo h($Provider['Provider']['name']); ?></td>
			<td><?php echo h($Provider['Provider']['address']) ;?></td>
			<td><?php echo h($Provider['Provider']['ruc']) ;?></td>
				</tr>
	<?php endforeach;?>
	</table>
</div>
