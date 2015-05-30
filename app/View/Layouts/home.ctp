
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('reset','style','fonts','http://fonts.googleapis.com/css?family=Amaranth,cake.generic'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<?php echo $this->element('sql_dump'); ?>



	<header>
		<h1>Módulo Almacen</h1>
		<nav>
			<ul>
				<li><a href="#">Proveedor</a></li>
				<li><a href="#">Producto</a></li>
				<li><a href="#">Orden de entrega</a></li>
				<li><a href="#">Login</a></li>			</ul>
		</nav>
	</header>
	<div class="wrapper_all">
	<section class="content">
		<section id="video">
		</section>
		<aside id="podcast-rel">
		</aside>
	</section>
	<section class="content">
		<section id="noticia-principal">
		</section>
		<aside id="noticias-rel">
		</aside>
	</section>
	</div>
	<footer>
		
	</footer>


</body>
</html>
