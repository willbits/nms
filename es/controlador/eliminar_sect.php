<?php 
require_once("valida.php");
	if(isset($_GET['id'])){
		$t_sect = $_GET['td'];
		$id = $_GET['gen'];
		$eliminar = new Us_valida;
		$eliminar->eliminar($t_sect);
		include "language_1.php";
		if ($eliminar->eliminar($t_sect) != true) {
			?>
				<script>
					alert('Registro eliminado');
					window.document.location="../vista/modificar_sect.php?id=<?php echo $id;?>&lang=<?php echo $lan;?>";
				</script>

			<?php
		}else{
			?>
				<script>
					alert('El registro no ha sido eliminado');
					window.document.location="../vista/modificar_sect.php?id=<?php echo $id;?>&lang=<?php echo $lan;?>";
				</script>

			<?php
		}
	}
	
	
?>