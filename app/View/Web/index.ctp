<header>
	<nav><?php echo $this->Html->image("logo.png");?></nav>
</header>
<div id="central">
	<div id="dato_evento" class="evento">
		<section>
			<h1>SOFTWARE FREE DAY<b> TACNA</b></h1>
			<h2>21 de Septienbre</h2>
			<h3>9am-1pm</h3>
				
			<div id="descripcion">
				<p> SFD es una celebración anual sobre el Software Libre! Cada año hay cientos de equipos organizando el Software Freedom Day en diferentes países y ciudades.
				Organizar el evento de SFD puede ser muy divertido! En este sitio y en su wiki, encontrarás muchas guías y recursos que probablemente te ayuden a crear un equipo para organizar el evento de Software Freedom Day. </p> 
			</div>
			<h3>Lugar: Centro Cultural municipal alto de la alianza</h3>
		</section>
	</div>
</div>
<div id="registro">
	<?php echo $this->Form->create('Inscripto', array('url'=>'/inscriptos/ajax_registrar', 'id'=>'fo3', 'name'=>'fo3', 
		'inputDefaults'=>array('div'=>false, 'label'=>false))); ?>
	<!-- <FORM ACTION="Registrar_inscribcion.php" METHOD="POST" id="fo3" name="fo3" onSubmit="return limpiar()"> -->
		<div id="reg">
			<INPUT id="registrar" TYPE="SUBMIT" VALUE="REGISTRAR" />
		</div>
		<div id="botones">
		  	<INPUT id="email" class="input01" NAME="data[Inscripto][email]" TYPE="text" required placeholder="Email" onfocus="javascript:box_actions.open()"/> 
	      	<INPUT id="nombre" class="input01" NAME="data[Inscripto][nombre_completo]" TYPE="TEXT" required placeholder="Nombre" onfocus="javascript:box_actions.open()"/>
	      	<INPUT id="dni" class="input01" NAME="data[Inscripto][dni]" TYPE="TEXT" required placeholder="Dni" />
	      	<INPUT id="celular" class="input01" NAME="data[Inscripto][telefono]" TYPE="TEXT" required placeholder="Celular" />
	      	<INPUT id="organizacion" class="input01" NAME="data[Inscripto][organizacion]" TYPE="TEXT" required placeholder="Organización/C. Estudio/Empresa" />
	      	<div id="certificado">
	      		<label>Certificado (S/. 20)</label>
	      		<label><input type="radio" name="data[Inscripto][certificado]" value="1"> Sí</label>
	      		<label><input type="radio" name="data[Inscripto][certificado]" value="0" checked > No</label>
	      	</div>
	      			<!--<INPUT id="registrar" TYPE="SUBMIT" VALUE="Registrar" />-->
	      	<div id="result"></div>
	     </div>
    </FORM>
</div> 

<div id="info">
	<div id="imagen_evento">
		<?php echo $this->Html->image("image_evento.png");?>
	</div>
	<section>

	<p><b>QUE ES ESTE EVENTO?</b><br>SFD es una celebración anual sobre el Software Libre! Cada año hay cientos de equipos organizando el Software Freedom Day en diferentes países y ciudades. Organizar el evento de SFD puede ser muy divertido! En este sitio y en su wiki, encontrarás muchas guías y recursos que probablemente te ayuden a crear un equipo para organizar el evento de Software Freedom Day
	......................................dlsds dsd sdsldsld</p>
	</section>
	<section>
	<p>SFD es una celebración anual sobre el Software Libre! Cada año hay cientos de equipos organizando el Software Freedom Day en diferentes países y ciudades. Organizar el evento de SFD puede ser muy divertido! En este sitio y en su wiki, encontrarás muchas guías y recursos que probablemente te ayuden a crear un equipo para organizar el evento de Software Freedom Day.</p>
	</section>
</div>
<div id="cronograma">
	<section>
	<h1>Cronograma</h1>
	<?php echo $this->Html->image("cronograma.png");?>
	</section>
</div>
<div id="lugar">

</div>
<footer>
	
</footer>
<script type="text/javascript">
    $("#fo3").submit(function(event){
		 event.preventDefault();
		 $.ajax({
		 	type		:'POST',
		 	url 		:$(this).attr('action'),
		 	data 		:$(this).serialize(),
		 	success 	:function(respuesta){
		 					$('#result').html(respuesta);
	               			$('#result').css('display','inline-block');
	               			$('#fo3').each (function(){
							  this.reset();
						});		
		 		}
			});
	});
</script>