<?php
require_once("valida.php");
	
	if(isset($_POST['titulo'])){
		$ant = $_POST['ant_titulo'];
		$titu = $_POST['titulo'];
		$suma = $_POST['sumario'];
		$noti = $_POST['noticia'];
		$autor = $_POST['autor'];

		$edita = new Us_valida;
		
		include "language_1.php";
	

		if ($edita->registrar($ant,$titu,$suma,$noti,$autor) == true) {
			?>
				<script languaje="Javascript">
				 	alert("¡Los datos no fueron actualizados!");
				 	window.document.location="../vista/modificar_news1.php?lang=<?php echo $lan;?>";
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