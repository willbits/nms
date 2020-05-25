<?php
require_once("controlador_section.php");
	
	if(isset($_POST['titulo'])){

		$titu = $_POST['titulo'];
		$descp = $_POST['descrip'];
		$t_sect = $_GET['td'];
		$id = $_GET['gen'];

		$edita = new Section;
		
		include "language_1.php";
	

		if ($edita->actualiza_text($t_sect,$titu,$descp) == true) {
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos no fueron actualizados!");
				 	window.document.location="../vista/modificar_sect.php?id=<?php echo $id;?>&lang=<?php echo $lan;?>";
				</script>
				
			<?php
		}else{
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos fueron actualizados correctamente!");
				 	window.document.location="../vista/modificar_sect.php?id=<?php echo $id;?>&lang=<?php echo $lan;?>";
				</script>
			<?php
		}

	}
?>