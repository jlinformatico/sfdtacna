<ul class="breadcrumb">
	<li><?php echo $this->Html->link('<i class="icon-home"></i>','/panel',array('escape'=>false));?> <span class="divider">/</span></li>
	<li><?php echo $this->Html->link('Encuestas','/encuestas');?> <span class="divider">/</span></li>
    <li class="active">Nueva encuesta</li>
</ul>

<div class="row-fluid">
    <div class="span12">
    	<div class="page-header">
			<h1>Encuestas <small>Agregar encuesta</small></h1>
		</div>
    	<div class="well">
    		<?php echo $this->Form->create('Encuesta',array('inputDefaults'=>array('label'=>false,'div'=>false)));?>
    			<div class="control-group">
    				<label>Titulo *</label>
					<?php echo $this->Form->input('encuesta_titulo',array('required','class'=>'span8'));?>
    			</div>
    			<div class="control-group">
    				<label>Descripción</label>
					<?php echo $this->Form->input('descripcion',array('class'=>'span9','rows'=>3));?>
    			</div>
    			<div class="form-actions">
    				<button type="submit" class="btn btn-success block-menu"><i class="icon-ok icon-white"></i> Siguiente</button>
					<?php echo $this->Html->link('<i class="icon-remove"></i> Cancelar',array('action'=>'index'),array('class'=>'btn','escape'=>false));?>
    			</div>
    		<?php echo $this->Form->end();?>
    	</div>
    </div>
</div>