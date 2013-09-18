<?php 
	switch ($save) {
		case 0:
			echo 'Bienvenido!, Ud. se registró con éxito.';
			break;
		case 1:
			echo 'Intente nuevamente. Hubo un error al registrar.';
			break;
		default:
			echo 'Ud. ya se encuentra registrado';
			break;
	}
?>