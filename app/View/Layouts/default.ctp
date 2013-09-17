<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min','estilo','bootstrap-responsive.min'));
		echo $this->Html->script(array('jquery-1.8.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<!-- MENU -->
	<?php $menu = $this->params['controller']; ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" style="color:#fff" href="#">SFDTACNA 2013</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><?php echo $this->Html->link('Panel','#');?></li>
						<li <?php if($menu == 'inscriptos'):?> class="active" <?php endif;?> >
							<?php echo $this->Html->link('Inscriptos','/inscriptos');?>
						</li>
						<li <?php if($menu == 'encuestas'):?> class="active" <?php endif;?> >
							<?php echo $this->Html->link('Encuestas','/encuestas');?>
						</li>
						<li <?php if($menu == 'informe'):?> class="active" <?php endif;?> >
							<?php echo $this->Html->link('Informe','/informe');?>
						</li>
						<li <?php if($menu == 'web'):?> class="active" <?php endif;?> >
							<?php echo $this->Html->link('Ver página','/web',array('target'=>'_blank'));?>
						</li>
					</ul>
					<p class="navbar-text pull-right right-menu">
						<?php echo $this->Html->link('Cerrar sesión',array('controller'=>'usuarios','action'=>'logout'),array('class'=>'navbar-link'));?>
					</p>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- Fin menu -->

	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
