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
		<h3>¿QUÉ ES ESTE EVENTO?</h3>
		<p>
			El Software Freedom Day (SFD) es una celebración anual sobre el Software Libre a nivel mundial. Se realiza desde el año 2004 y se adoptó su realización el día 21 de Septiembre de cada año.</p>
		<p>
			Su principal objetivo es promover el uso del software libre, dando a conocer al público en general su filosofía, alcances, avances y desarrollo enseñando a las personas a conectarse, crear y compartir un mundo digital que es participativo, transparente y sostenible.
		</p>
	</section>
	<section>
		<p>A tal fin, las diversas comunidades locales de software libre (en cada país/ciudad/localidad), organizan simultáneamente eventos donde se difunde el software libre y motiva su adopción de este y estándares abiertos a traves de charlas, ponencias, talleres y mesas redondas sobre temática local, nacional y latinoamericana en torno al Software Libre, en toda su gama de expresiones: artística, académica, empresarial y social</p>
	</section>
</div>
<div id="cronograma">
	<h3>CRONOGRAMA</h3>
	<?php echo $this->Html->image("cronograma.png");?>
</div>
<div id="lugar">
	<h3>LUGAR</h3>
	<p>El Evento se Desarrolllará en el <strong>CENTRO CULTURAL MUNICIPAL ALTO DE LA ALIANZA </strong>el Sábado 21 de Septiembre desde las 9 am hasta las 8 pm.
	</p>
	<iframe width="547" height="312" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.pe/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=centro+cultural+tacna+vigil&amp;aq=&amp;sll=-17.993986,-70.244476&amp;sspn=0.001472,0.002642&amp;t=m&amp;ie=UTF8&amp;hq=centro+cultural&amp;hnear=Vigil,+Tacna&amp;ll=-17.993826,-70.244533&amp;spn=0.003571,0.00456&amp;z=17&amp;output=embed"></iframe>
	<?php echo $this->Html->image('lugar.png');?>
</div>
<div id="organizadores">
	<h3>ORGANIZADORES</h3>
	<?php echo $this->Html->image("logo_basadrinux.png");?>
</div>
<div id="patrocinan">
	<h3>PATROCINAN</h3>
	<?php echo $this->Html->link($this->Html->image("patrocinan/logo-unjbg.png"),"http://www.unjbg.edu.pe",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/logo-mdaa.png"),"http://www.munialtoalianza.gob.pe",array('escape'=>false));?>
</div>
<div id="auspicios">
	<h3>AUSPICIAN</h3>
	<?php echo $this->Html->link($this->Html->image("patrocinan/radio-cmf.png",array('width'=>250)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/suri.jpg",array('width'=>200)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/logo-ebenezer.png",array('width'=>380)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/coyotex.png",array('width'=>380)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/super_stereo.png",array('width'=>250)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/idw.png",array('width'=>250)),"http://www.idw.com.pe/inicio/",array('escape'=>false));?>
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