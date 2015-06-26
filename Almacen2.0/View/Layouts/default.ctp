
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>

	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');
		echo $this->Html->css('fonts');
		echo $this->Html->css('reset');
		echo $this->Html->css('clndr');

		echo $this->Html->script('bootstrap');
		echo $this->Html->script('clndr');
		echo $this->Html->script('site');

	?>

</head>
<body>
<div class="main">
	<div class="container">
		<div class="logo">
			<img src="img/lo.png" alt=""> 
		</div>
		<div class="top-header">
		<nav class="navbar navbar-default menu">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		   <!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav" id= "menu">
        	<li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
        	<li><?php echo $this->Html->link(__('Provider'), array('controller'=>'Providers')); ?></li>
        	<li><?php echo $this->Html->link(__('Product'), array('controller'=>'Products')); ?></li>
        	<li><?php echo $this->Form->postLink(__('Purchase Orders'), array('controller'=>'PurchaseOrders')); ?></li>
      	</ul>
    	</div><!-- /.navbar-collapse -->
 	<!-- /.container-fluid -->
 		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		</nav>
</div>
	<div id="container">
		<div class="footer-bottom">
			<p>UCSP - Almacen<a href="http://.com/" target="_blank">Ingenieria de Software 2</a> </p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
