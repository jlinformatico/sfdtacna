<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
			<li><a href="#"><i class="icon-home"></i></a><span class="divider">/</span></li>
	    	<li class="active">Inscriptos</li>
    	</ul>
    	<div class="page-header">
			<h1>Inscriptos <small>Gestión de inscriptos</small></h1>
		</div>
    	<section>
			<a href="<?php echo $this->Html->url(array('action'=>'registrar')); ?>" class="btn btn-primary">
				<i class="icon-plus icon-white"></i> Agregar
			</a>
			<form action="#" method="GET" id="form-editar" class="form-horizontal">
				<button class="btn"><i class="icon-pencil"></i> Editar</button>
				<input type="hidden" name="id" value="" class="inscripto_id" />
			</form>
			<form action="#" method="POST" id="form-eliminar" class="form-horizontal">
				<button class="btn btn-danger"><i class="icon-trash icon-white"></i> Eliminar</button>
				<input type="hidden" name="opcion" value="eliminar" />
				<input type="hidden" name="id" value="" class="inscripto_id" />
			</form>
		</section>
		<section style="margin-top:25px">
    		<table id="dataTable" class="table table-striped table-bordered">
    			<thead>
    				<th><input type="checkbox" id="seleccionados"/></th>
    				<th>#</th>
    				<th>Nombres y Apellidos</th>
    				<th>Asistencia</th>
    				<th>Email</th>
    				<th>Teléfono</th>
    				<th>Fecha de registro</th>
    			</thead>
    			<tbody>
    			<?php if(!empty($inscriptos)):?>
    			<form id="form-inscriptos">
    			<?php foreach ($inscriptos as $inscripto): ?>
				<tr> 
					<td><input type="checkbox" name="inscriptoid" value="<?php echo $inscripto['Inscripto']['id'];?>"></td>
					<td><?php echo $inscripto['Inscripto']['id']; ?></td>
					<td>
						<?php echo $inscripto['Inscripto']['nombre_completo']; ?>
						<?php if($inscripto['Inscripto']['certificado']):?>
							<span class="label label-success pull-right">Con certificado</span>
						<?php else: ?>
							<span class="label label-important pull-right">Sin certificado</span>
						<?php endif;?>
					</td>
					<td>								
						<?php if($inscripto['Inscripto']['asistencia']):?>
							<a href="#"><?php echo $this->Html->image('tick.png'); ?></a>
						<?php else: ?>
							<a href="#"><?php echo $this->Html->image('delete.png'); ?></a>
						<?php endif;?>
					</td>
					<td><?php echo $inscripto['Inscripto']['email']; ?></td>
					<td><?php echo $inscripto['Inscripto']['telefono']; ?></td>
					<td>
					<?php setlocale(LC_TIME, "spanish");
						$fecha = strftime(" %d/%m/%y %H:%M:%S ",strtotime($inscripto['Inscripto']['fecha_registro']));
						echo $fecha;
					?>
					</td>
				</tr>
				<?php endforeach; ?>
				</form>
				<?php endif;?>
    			</tbody>
    			</table>
    	</section>

	</div>
</div>
<style type="text/css">
	.form-horizontal{
		display:inline-block
	}
</style>
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

