<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
			<li><a href="#"><i class="icon-home"></i></a><span class="divider">/</span></li>
	    	<li><?php echo $this->Html->link('Inscriptos', array('action'=>'index')); ?>
	    		<span class="divider">/</span>
	    	</li>
	    	<li class="active">Registrar</li>
    	</ul>
    	<div class="page-header">
			<h1>Inscriptos <small>Registrar</small></h1>
		</div>

		<?php echo $this->Form->create('Inscripto', array('class'=>'form-horizontal','inputDefaults'=>array('div'=>false, 'label'=>false))); ?>
		<div class="control-group">
			<label class="control-label" for="InscriptoDni">D.N.I.</label>
			<div class="controls">
				<?php echo $this->Form->input('dni'); ?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="InscriptoNombreCompleto">Nombres y Apellidos</label>
			<div class="controls">
				<?php echo $this->Form->input('nombre_completo'); ?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="InscriptoEmail">Email</label>
			<div class="controls">
				<?php echo $this->Form->input('email'); ?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="InscriptoTelefono">Teléfono</label>
			<div class="controls">
				<?php echo $this->Form->input('telefono'); ?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="InscriptoOrganizacion">Organización</label>
			<div class="controls">
				<?php echo $this->Form->input('organizacion'); ?>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox inline">
					 <?php echo $this->Form->input('certificado'); ?> Certificado
				</label>
				<label class="checkbox inline">
					 <?php echo $this->Form->input('asistencia'); ?> Asistencia
				</label>
			</div>
		</div>
		<div class="form-actions">
	    	<button type="submit" class="btn btn-primary">Registrar</button>
	    	<?php echo $this->Html->link('Cancelar', array('action'=>'index'),array('class'=>'btn')); ?>
	    </div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>