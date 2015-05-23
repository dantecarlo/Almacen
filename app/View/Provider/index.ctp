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

<p>
<?php echo $this->Paginator->counter(
	array('fortmat' => 'Pagina {:page} de {:pages},mostrando {:current} registros de {:count}')
		);?>
</p>

<div class="paging">
		<?php echo $this->Paginator->prev('< anterior', array(), null, array('class'=>'prev	disabled'
		));?>

		<?php echo $this->Paginator->numbers(array('separator'=>''));?>
		<?php echo $this->Paginator->next('siguiente >', array(),null,array('class'=>'next disabled'));?>




</div>
