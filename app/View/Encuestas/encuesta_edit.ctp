<ul class="breadcrumb">
	<li><?php echo $this->Html->link('<i class="icon-home"></i>','/panel',array('escape'=>false));?> <span class="divider">/</span></li>
	<li><?php echo $this->Html->link('Encuestas','/encuestas');?> <span class="divider">/</span></li>
    <li class="active">Editar encuesta</li>
</ul>

<div class="row-fluid">
    <div class="span12">
    	<div class="page-header">
			<h1>Encuestas <small>Editar</small></h1>
		</div>
    	<div class="well">
    		<?php if(!empty($preguntas)){ ?>
			<ul class="listado">
				<?php $i=1;?>
				<?php foreach ($preguntas as $pregunta) {?>
					

				<?php $i++; };?>
			</ul>
			<?php };?>
    	</div>
    </div>
</div>	
<?php print_r($preguntas);?>