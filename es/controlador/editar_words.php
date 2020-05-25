<?php
require_once("valida.php");
	
	if(isset($_POST['palabra'])){
		$edita = new Us_valida;
		$edita->actualizar_words();
		include "language_1.php";
	

		if ($edita->actualizar_words() == true) {
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos no fueron actualizados!");
				 	window.document.location="../vista/modifica_words.php?lang=<?php echo $lan;?>";
				</script>
				
			<?php
		}else{
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos fueron actualizados correctamente!");
				 	window.document.location="../vista/modifica_words.php?lang=<?php echo $lan;?>";
				</script>
			<?php
		}

	}
?>