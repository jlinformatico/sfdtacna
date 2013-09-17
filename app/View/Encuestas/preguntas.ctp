<ul class="breadcrumb">
	<li><?php echo $this->Html->link('<i class="icon-home"></i>','/panel',array('escape'=>false));?> <span class="divider">/</span></li>
	<li><?php echo $this->Html->link('Encuestas','/encuestas');?> <span class="divider">/</span></li>
    <li class="active">Preguntas</li>
</ul>

<div class="row-fluid">
    <div class="span12">
    	<div class="page-header">
			<h1>Encuestas <small>Agregar Preguntas</small></h1>
		</div>
    	<div class="well">
    		<?php echo $this->Form->create('Encuesta',array('inputDefaults'=>array('label'=>false,'div'=>false)));?>
    			<div class="control-group">
    				<label>Formule la pregunta *</label>
					<?php echo $this->Form->input('formulacion_pregunta',array('required','class'=>'span8'));?>
    			</div>
    			<div class="control-group">
    				<label>Respuestas</label>
    				<div class="controls">
    					<input type="text" name="opcion[0]" class="span8" style="margin-bottom: 2px;" maxlength="300" value="Si" required="required"><br/>
        				<input type="text" name="opcion[1]" class="span8" style="margin-bottom: 2px;" maxlength="300" value="No" required="required"><br/>
        					<button href="javascript:void(0);" class="btn" id="padd">Añadir respuesta</button>
        			</div>
    			</div>
    			<div class="control-group">
    				<label class="checkbox inline">
						<input type="checkbox" name="condicion" value="1">Obligatoria
					</label>
    			</div>
    			<button type="submit" class="btn btn-success block-menu"><i class="icon-ok icon-white"></i> Agregar pregunta</button>
					<?php echo $this->Html->link('<i class="icon-remove icon-white"></i> Finalizar Encuesta',array('action'=>'index'),array('class'=>'btn btn-primary','escape'=>false));?>
    		<?php echo $this->Form->end();?>
    	</div>
    </div>
</div>

<script type="text/javascript">
	// add answer ✔
    jQuery.fn.padd = function (id, index) {
        $(this).each(function () {
            var elem = $(this);
            elem.data('id', id);
            elem.data('index', index);

            elem.click(function (e) {
                e.preventDefault();
                var obj_id = $(this).data('id') + $(this).data('index');
                var obj_insert = '<div style="diplay:block"><input type="text" required="required" class="span8" style="margin-bottom:2px;" maxlength="300" name="'+ id +'[' + index + ']" id="' + obj_id + '" /><button class="btn btn-danger" style="margin-left: 3px;" onclick="$(\'#padd\').show();$(\'#' + obj_id + '\').remove(); $(this).remove(); return false;"><i class="icon-remove icon-white"></i></button></div>';
                index ++;
                $(this).data('index', index);
                elem.before($(obj_insert));

                if ($('input[type=text]').length > 13) $('#padd').hide();
            });
          
        });
        return this;
    };
    $('#padd').padd('opcion',  2);
</script> 