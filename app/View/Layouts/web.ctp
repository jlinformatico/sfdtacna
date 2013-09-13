<!DOCTYPE html>
<html lang="es-PE">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Software Free Day</title>

	<!--=============== META PARA LA TRADUCCION ==================== -->
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('estilos'));
		echo $this->Html->script(array('jquery-1.3.min','mainFunctions','formulario'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
	<div id="contenedor">
		<!-- ================= CONTENIDO ======================== -->
		<?php echo $this->fetch('content'); ?>
	</div>
</body>