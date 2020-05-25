<?php
require_once("valida.php");
	
	if(isset($_POST['nombre'])){
		$edit = new Us_valida;
		$edit->actualizar();
		include "language_1.php";
	

		if ($edit->actualizar()== true) {
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos no fueron actualizados!");
				 	window.document.location="../vista/change.php?lang=<?php echo $lan;?>";
				</script>
				
			<?php
		}else{
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos fueron actualizados correctamente!");
				 	window.document.location="../vista/modificar_team.php?lang=<?php echo $lan;?>";
				</script>
			<?php
		}

	}
?>