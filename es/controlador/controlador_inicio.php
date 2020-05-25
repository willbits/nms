 <?php
require_once("valida.php");

	if (isset($_POST['idusuario'])){
		include "language_1.php";
		$users = new Us_valida;
		$users->usuario();
		session_start();
		$_SESSION['idusuario'] = $_POST['idusuario'];


		if ($users->datos("nmspro_nms")) {			
			foreach ($users->datos("nmspro_nms") as $array)
				$_SESSION['nombre'] = $array['nombre'];
				header("Status: 301 Moved Permanently");
				header("Location: ../vista/iniciar.php?lang=<?php echo $lan;?>");
				exit;
		}else{
		?>
			<script languaje="Javascript">
				 alert("¡Ingreso algun dato incorrecto! Verifique usuario o clave.");
				 window.document.location="../vista/index.php?lang=<?php echo $lan;?>";
			</script>
		<?php
		
		}	
}


?>