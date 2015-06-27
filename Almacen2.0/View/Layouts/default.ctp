
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
		echo $this->Html->script('underscore-min');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('responsiveslides.min');
		echo $this->Html->script('mediaelement-and-player.min');
	?>

</head>
<body>
<div class="main">
	<div class="container">
		<div class="logo">
			<img src="img/almacen.png" alt=""> 
		</div>
		<div class="top-header">
		<nav class="navbar navbar-default menu">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		   <!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav" id= "menu">
        	<li class="active"><a href="http://localhost/Almacen/Almacen2.0/">Home <span class="sr-only">(current)</span></a></li>
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
	<div class="banner">
			  
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        });
    });
    </script>

			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h4>UCSP </h4>
							<h3> PROVIDER.</h3>
						<a href="#"><i> </i>read more</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h4> UCSP</h4>
							<h3> PRODUCT.</h3>
						<a href="#"><i> </i>read more</a>
						</div>
					
				</li>
				<li>
						<div class="banner-text">
						<h4> UCSP</h4>
							<h3> PURCHASE ORDERS.</h3>
						<a href="#"><i> </i>read more</a>
						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>
</div>
	<div id="container">
		<div class="footer-bottom">
			<p>© Danet Delgado | Luisa Nuñez | Dante Nuñez | Eileen Nuñez  <a href="" target="_blank"> Ing. Soft. 2</a> </p>
		<ul  class="social in-social">
						<li><a href="#"> <i></i></a></li>
						<li><a href="#"> <i class="twitter"></i></a></li>
						
					</ul>
					<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
