<header>
	<nav><?php echo $this->Html->image("logo.png");?></nav>
</header>
<div id="central">
	<div id="dato_evento" class="evento">
		<section>
			<h1>SOFTWARE FREEDOM DAY<b> TACNA</b></h1>
			<h2>21 de Septiembre</h2>
			<h3>9am-6pm</h3>
			<h1>LUGAR: <br/> Centro Cultural Municipal Alto de la Alianza</h1>
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
			<div class="clearfix">
		  		<INPUT id="email" class="input01" NAME="data[Inscripto][email]" TYPE="text" required placeholder="Email" onfocus="javascript:box_actions.open()"/> 
		  	</div>
		  	<div class="clearfix">
	      		<INPUT id="nombre" class="input01" NAME="data[Inscripto][nombre_completo]" TYPE="TEXT" required placeholder="Nombre" onfocus="javascript:box_actions.open()"/>
	      	</div>
	      	<div class="clearfix">
	      		<INPUT id="dni" pattern="\d{8}" maxlength="8" class="input01" NAME="data[Inscripto][dni]" TYPE="TEXT" required placeholder="DNI" />
	      	</div>
	      	<div class="clearfix">
	      		<INPUT id="celular" class="input01" NAME="data[Inscripto][telefono]" TYPE="TEXT" required placeholder="Celular" />
	      	</div>
	      	<div class="clearfix">
	      		<INPUT id="organizacion" class="input01" NAME="data[Inscripto][organizacion]" TYPE="TEXT" required placeholder="Organización / C. Estudio / Empresa" />
	      	</div>
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
	<h3>TEMARIO</h3>
	<ul>
		<li>Proyecto OLPC (Laptop por niño)</li>
		<li>COMPUTACIÓN FISICA</li>
		<li>Programación Arduino con Python</li>
		<li>Software Libre para la Educación</li>
		<li>Software Libre para la Gestión Pública</li>
		<li>Desarrollando aplicaciones móviles para Android y PhoneGAP</li>
		<li>Animación 3D con Blender</li>
		<li>Computación Interactiva con SCRATCH</li>
		<li>Feria tecnológica EXPO FREE - Cultura informática libre</li>
		<li>Mesa Redonda.</li>
	</ul>
	<?php //echo $this->Html->image("cronograma.png");?>
</div>
<div id="lugar">
	<h3>LUGAR</h3>
	<p>El Evento se Desarrolllará en el <strong>CENTRO CULTURAL MUNICIPAL ALTO DE LA ALIANZA </strong><br />el Sábado 21 de Septiembre desde las 09:00am hasta las 06:00pm
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
	<?php echo $this->Html->link($this->Html->image("patrocinan/radio-cmf.png",array('width'=>220)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/suri.jpg",array('width'=>200)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/logo-ebenezer.png",array('width'=>350)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/coyotex.png",array('width'=>350)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/super_stereo.png",array('width'=>220)),"#",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/idw.png",array('width'=>220)),"http://www.idw.com.pe/inicio/",array('escape'=>false));?>
	<?php echo $this->Html->link($this->Html->image("patrocinan/ivica.png",array('width'=>220)),"#",array('escape'=>false));?>
</div>
<div id="facebook">
	<h3>BÚSCANOS EN FACEBOOK</h3>
	<div class="fb-like-box" data-href="https://www.facebook.com/sfdtacnaperu" data-width="900" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>

<div id="codigo">
	<?php echo $this->Html->image("pie1.png");?>
	<?php echo $this->Html->image("pie2.png");?>
	<p>
		El contenido de la web está bajo la licencia GPL. 
		El código fuente de esta página está disponible en <a href="https://github.com/jlinformatico/sfdtacna" target="_blank">GitHub</a> bajo la GNU Public License 3.0.
	</p>
</div>
<div id="encabezado">
		<div class="header">
			<div id="logo">
				<?php echo $this->Html->image("logo.png");?>
			</div>
			<div id="reloj">
				<center>	
					<div id="falta">FALTAN:</div>
					<section>
					<!--Cuenta Regresiva-->		
						<div id="defaultCountdown2"></div>
					</section>
				 	<!--fin cuenta regresiva--> 
				 	<?php echo $this->Html->link($this->Html->image("ico-inicio.png"),'#central',array('escape'=>false));?>
				 </center>
			</div>
		</div>		
</div> 
<script type="text/javascript">
	$(function () {
	    var austDay = new Date();
	    date_end2 = new Date(2013, 9 - 1, 21);
	    $('#defaultCountdown2').countdown({until: date_end2});
	});
</script>
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	$this->Html->css('jquery.countdown',null,array('inline'=>false));
	$this->Html->script('jquery.countdown',array('inline'=>false));
	$this->Html->script('jquery.countdown-es',array('inline'=>false));
	$this->Html->script('scrolltop',array('inline'=>false));
?>
