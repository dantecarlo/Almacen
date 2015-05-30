<?php 

	$this->layout = 'home';
?>

<h1> Bienvenido al almacén</h1>
<script type="text/javascript">
	var js = jQuery.noConflict();
	(function($){
		js(document).ready(function(){
			js('#noticia-principal').load('html/article.html', function(){});
			js('#video').load('html/video.html', function(){});
			//js('#noticias-rel').load('html/articles.html', function(){});
			js('#podcast-rel').load('html/audio.html', function(){});
		});
	})(jQuery);
</script>