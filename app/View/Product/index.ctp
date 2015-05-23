<div class ="index">
	<h3>Listado de Productos</h3>
	<table>
		<tr>
			<tr>
				<th><?php echo $this -> Paginator -> sort('name', 'Name') ?></th>
				<th><?php echo $this -> Paginator -> sort('id_local', 'Local') ?></th>
				<th><?php echo $this -> Paginator -> sort('amount', 'Amount') ?></th>

				
			</tr>
		</tr>
		<?php foreach ($Product as $k => $Product) :?>
		<tr>
			<td><?php echo h($Product['Product']['name']); ?></td>
			<td><?php echo h($Product['Product']['id_local']); ?></td>
			<td><?php echo h($Product['Product']['amount']) ;?></td>
			
				</tr>
	<?php endforeach;?>
	</table>
</div>
