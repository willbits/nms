<?php
require_once("valida.php");
	
	if(isset($_POST['titulo'])){
		$edita = new Us_valida;
		$edita->actualizar_noti1();
		include "language_1.php";
	

		if ($edita->actualizar_noti1() == true) {
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos no fueron actualizados!");
				 	window.document.location="../vista/modificar_news2.php?lang=<?php echo $lan;?>";
				</script>
				
			<?php
		}else{
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos fueron actualizados correctamente!");
				 	window.document.location="../vista/modificar_news1.php?lang=<?php echo $lan;?>";
				</script>
			<?php
		}

	}
?>