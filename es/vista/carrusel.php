<?php
 session_start();
include "head.php";

require_once('../controlador/controlador_words.php');

?>
<div class="modificar">
	<?php
	$td = "carrucel";
	$nombre = "Imagen";
	$img = new words;
	$img->traer_img();
$img1 = new words;
	$img1->traer_img();
	if (!empty($img1->datos("nmspro_nms"))) {
        foreach ($img->datos("nmspro_nms") as $key){
            	
        ?>
            <img class="deslizar" src="<?php echo $key['img'];?>" />
            <a href="actualizar_img.php?id=<?php echo $key['id'];?>&td=<?php echo $td;?>&nam=<?php echo $nombre;?>&lang=<?php echo $lan;?>"><img src="../../images/editar_imagen.png" width="10%" height="10%" /></a>
        <?php
        }
        ?>

    <div class="news_vacia1">
		<center>
								
			<span class="comunication1">
				<h5>INSERTAR NUEVA</h5>
				<a href="agregar_img.php?lang=<?php echo $lan;?>&td=<?php echo $td;?>&nam=<?php echo $nombre;?>"><img src="../../images/agregar.png" ></a>
			</span>
		</center>
	</div>
        <?php
    }else{
         ?>
         <div class="news_vacia">
			<div class="news_vacia1">
				<center>
					<h2>No hay imagenes</h2>
					<span class="comunication1">
						<h5>INSERTAR NUEVA</h5>
						<a href="agregar_img.php?lang=<?php echo $lan;?>&td=<?php echo $td;?>&nam=<?php echo $nombre;?>"><img src="../../images/agregar.png" ></a>
					</span>
				</center>
			</div>
		</div>
         <?php		
    } 
    ?>
			
    

</div>

<?php include "footer_2.php";


?>