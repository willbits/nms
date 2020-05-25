
<?php session_start();
include "head.php";
require_once('../controlador/valida.php');

?>



<div class="modificar">
	<?php	
		$busca = new Us_valida;
		$busca->traer_noti2();
		foreach ($busca->datos($base) as $key) {
	?>
			<form id="busqueda" method="post" action="../controlador/editar_noti.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>">
				Titulo    <input id="ingresar" type="text" name="titulo" value="<?php echo $key['titulo']; ?>"><br/>
				Decripcion <textarea id="biografia" type="text" name="descripcion" ><?php echo $key['descripcion']; ?></textarea><br/>
				<input type="submit" id="enter" value="Modificar">
			</form>
			<!--<form action="../controlador/controlador_images.php?id=<?php echo $key['id']?>" method="post" enctype="multipart/form-data">
    			Select image to upload:
    			<input type="file" name="fileToUpload" id="fileToUpload">
    			<input type="submit" value="Upload Image" name="submit">
			</form>-->		
	<?php
		}

	?>
</div>

<?php include "footer_2.php";
/*Maribel De Sousa 14016449 /Kervin Requena 17966383
digitalmarkerka@gmail.com
*/
?>

