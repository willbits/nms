<?php session_start();
	include "head.php";

	include "session.php";

	include "red_social.php";

	require_once("../controlador/valida.php");

?>
	<div class="modificar">
	<?php	
		$busca = new Us_valida;
		$busca->traer_datos();
		foreach ($busca->datos($base) as $key) {
	?>
			<form id="busqueda" method="post" action="../controlador/editar.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>">
				Nombre    <input id="ingresar" type="text" name="nombre" value="<?php echo $key['nombre']; ?>"><br/>
				Apellido  <input id="ingresar" type="text" name="apellido" value="<?php echo $key['apellido']; ?>"><br/>
				Biografía <textarea id="biografia" type="text" name="biografia" ><?php echo $key['biografia']; ?></textarea><br/>
				Cargo     <input id="ingresar" type="text" name="cargo" value="<?php echo $key['cargo']; ?>"><br/>
				<input type="submit" id="enter" value="Modificar">
			</form>
	<?php
		}

	?>
	</div>
	<script>
		var modal = document.getElementById('id01');

		window.onclick = function(event) {
			if (event.target == modal) {
			    modal.style.display = "none";
			}
		}
	</script>
<?php
	include "footer_2.php";
	include "copr.php";
?>




