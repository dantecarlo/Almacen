
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


		<h1>Módulo Almacen</h1>
	

</head>
<body>
	<div id="container">
		<div id="header">
			
			<h1>MODULO ALMACENNN</h1>

		 <div id="menu">

			<?php echo $this->Html->link(__('Provider'), array('controller'=>'Providers')); ?>
			<?php echo $this->Html->link(__('Product'), array('controller'=>'Products')); ?>
			<?php echo $this->Form->postLink(__('Purchase Orders'), array('controller'=>'PurchaseOrders')); ?>
		</div>	



		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
