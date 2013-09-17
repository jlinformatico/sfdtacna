<!DOCTYPE html>
<html lang="es-PE">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Software Free Day</title>

	<!--=============== META PARA LA TRADUCCION ==================== -->
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min','estilo','bootstrap-responsive.min'));
	
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">	
				<a class="brand" href="#">Software Freedom Day - Sede Tacna Perú</a>
			</div>
		</div>
	</div>
	<div class="container">
		<!-- ================= CONTENIDO ======================== -->
		<?php echo $this->fetch('content'); ?>
	</div>
</body>