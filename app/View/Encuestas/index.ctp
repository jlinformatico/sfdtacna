<ul class="breadcrumb">
	<li><?php echo $this->Html->link('<i class="icon-home"></i>','/panel',array('escape'=>false));?> <span class="divider">/</span></li>
    <li class="active">Encuestas</li>
</ul>

<div class="row">
    <div class="span1">
    	<?php echo $this->Html->link('<i class="icon-plus icon-white"></i><br> Agregar',array('action'=>'encuesta_add'),array('class'=>'btn btn-primary','escape'=>false));?>
	</div>
</div>

<div class="row-fluid">
   	<div class="span12">
    	<div class="box">
    		<h4 class="box-header round-top">Gestión de Encuestas</h4>
    		<div class="box-content">
    			<table id="dataTable" class="table table-striped table-bordered">
    				<thead>
    					<th>#</th>
    					<th>Titulo</th>
    					<th>Fecha registro</th>
    					<th>Acciones</th>
    				</thead>
    				<tbody>
    				<?php if(!empty($encuestas)):?>
    				<?php foreach ($encuestas as $encuesta): ?>
						<tr> 
							<td><?php echo $encuesta['Encuesta']['id']; ?></td>
							<td><?php echo $encuesta['Encuesta']['encuesta_titulo']; ?></td>
							<td>
							<?php setlocale(LC_TIME, "spanish");
								$fecha = strftime(" %d/%m/%y %H:%M:%S ",strtotime($encuesta['Encuesta']['fecha_creacion']));
								echo $fecha;?>
							</td>
							<td>
								<?php 
									echo $this->Html->link('<i class="icon-user icon-white"></i> ', array('action'=>'encuesta_asignar', $encuesta['Encuesta']['id']), array('class'=>'btn btn-success','title'=>'Asignar encuesta','escape'=>false)); 

									echo $this->Html->link('<i class="icon-pencil icon-white"></i> ', array('action'=>'Editar encuesta', $encuesta['Encuesta']['id']), array('class'=>'btn btn-warning','title'=>'Asignar encuesta','escape'=>false));

									echo $this->Html->link('<i class="icon-search icon-white"></i> ', array('action'=>'encuesta_asignar', $encuesta['Encuesta']['id']), array('class'=>'btn btn-info','title'=>'Resultados','escape'=>false));

									echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'encuesta_delete', $encuesta['Encuesta']['id']), array('class'=>'btn btn-danger','title'=>'Eliminar','escape'=>false,'confirm' => '¿Está seguro que desea eliminar este registro?'));
								?>
							</td>
						</tr>
					<?php endforeach; ?>
					<?php endif;?>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
</div>

	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#dataTable').dataTable({
				"sPaginationType": "full_numbers",		
				"bInfo": false,	
				"bJQueryUI": true,		
				"oLanguage": {	"sLengthMenu": "_MENU_",		
					"sSearch": "",			
					"sInfo": "Mostrando _START_ de _END_ de _TOTAL_ registros",		
					"sZeroRecords": "No hay ningún registro",		
					"oPaginate": {					
						"sFirst":    "«",			
						"sPrevious": "←",				
						"sNext":     "→",				
						"sLast":     "»"				
						}		
					}
			});
		});
	</script>

<?php
	$this->Html->script('jquery.dataTables.min',array('inline'=>false));
?>

