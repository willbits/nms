<?php session_start();
	include "head.php";

	include "session.php";

	include "red_social.php";

	require_once("../controlador/controlador_section.php");

?>
	<div class="modificar">
		<?php	
			if (isset($_GET["id"])) {
				$t_sect = $_GET['td'];
				$id = $_GET['gen'];
			$sect = new Section;
			$sect->traer_sect();
			foreach ($sect->datos($base) as $key) {
		?>
				<form id="busqueda" method="post" action="../controlador/editar_sect1.php?id=<?php echo $key['id'];?>&td=<?php echo $t_sect;?>&gen=<?php echo $id;?>&lang=<?php echo $lan;?>">
					Titulo	<input id="ingresar" type="text" name="titulo" value="<?php echo $key['titulo_s']; ?>"><br/>
					Descripcion    <textarea id="biografia" type="text" name="descrip" ><?php echo $key['descripcion']; ?></textarea><br/>
					<input type="submit" id="enter" value="Actualizar">
				</form>
		<?php
			}
			}else{
				$t_sect = $_GET['td'];
				
				?>
				<form id="busqueda" method="post" action="../controlador/editar_sect.php?td=<?php echo $t_sect;?>&lang=<?php echo $lan;?>">
					Titulo    <input id="ingresar" type="text" name="titulo" ><br/>
					Descripcion	<textarea id="biografia" type="text" name="descrip" ></textarea><br/>
					<input type="submit" id="enter" value="Agregar">
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
