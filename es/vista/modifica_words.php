<?php session_start();
include "head.php";
require_once('../controlador/valida.php');

?>



<div class="modificar">
	<?php	
		$busca = new Us_valida;
		$busca->traer_words();
		foreach ($busca->datos($base) as  $key) {
	?>
			<form id="busqueda" method="post" action="../controlador/editar_words.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>">
				Palabra    <input id="ingresar" type="text" name="palabra" value="<?php echo $key['palabra']; ?>"><br/>
				<?php
					if(!empty($key['descripcion'])){
						?>
						Decripcion <textarea id="biografia" type="text" name="descripcion" ><?php echo $key['descripcion']; ?></textarea><br/>
						<?php
					}
						?>
				<input type="submit" id="enter" value="Modificar">
			</form>
				
					
	<?php
		}
	?>


			
</div>

<?php include "footer_2.php";
		include "copr.php";
?>
