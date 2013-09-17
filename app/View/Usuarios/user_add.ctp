<ul class="breadcrumb">
	<li><?php echo $this->Html->link('<i class="icon-home"></i>','/panel',array('escape'=>false));?> <span class="divider">/</span></li>
	<li><?php echo $this->Html->link('Usuarios','/usuarios');?> <span class="divider">/</span></li>
    <li class="active">Agregar usuario</li>
</ul>

<div class="row-fluid">
   	<div class="span12">
    	<div class="page-header">
			<h1>Usuarios
				<small>Agregar</small>
			</h1>
		</div>
    	<div class="well">
    		<?php echo $this->Form->create('Usuario',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false,'div'=>false)));?>
    		<div class="row-fluid">
    			<div class="span5">
    				<label>Username *</label>
					<?php echo $this->Form->input('username',array('required','class'=>'span8'));?>
    			</div>
    			<div class="span6">
    				<label>Password *</label>
					<?php echo $this->Form->input('password',array('required','class'=>'span8'));?>
    			</div>
    		</div>
    		<div class="form-actions">
    			<button type="submit" class="btn btn-success block-menu"><i class="icon-ok icon-white"></i> Guardar</button>
				<?php echo $this->Html->link('<i class="icon-remove"></i> Cancelar',array('action'=>'index'),array('class'=>'btn','escape'=>false));?>
    		</div>	
    		<?php echo $this->Form->end();?>
    	</div>
    </div>
</div>
