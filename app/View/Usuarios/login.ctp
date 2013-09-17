<div class="row-fluid">
	<section class="login-container"><!-- login -->
		<div class="login-header">
			<h3>Ingreso al Sistema</h3>
		</div>
					<?php echo $this->Session->flash(); ?>
					<div class="login-content">
					<?php echo $this->Form->create('Usuario', array('action' => 'login')); ?>
							<fieldset>
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-large icon-user"></i></span>
											<input type="text" id="UsuarioLogin" placeholder="Usuario" class="input-large" name="data[Usuario][username]" required />
										</div>
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-large icon-lock"></i></span>
											<input type="password" class="input-large" id="UsuarioPassword" placeholder="Contraseña" name="data[Usuario][password]" required />
										</div>
									</div>
								</div>
								<div class="pull-right">
									<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
								</div>
							</fieldset>
					<?php echo $this->Form->end();?>
					</div>
				</section>					
</div>