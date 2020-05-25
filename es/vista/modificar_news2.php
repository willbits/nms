<?php 
include "head_noti_2.php";

include "../controlador/controlador_news1.php";?>
	<section class="section_news">
		<article class="news1">
			<?php	
			if (isset($_GET["id"])) {
			$news1 = new News;
			$news1->traer_noti1();
			foreach ($news1->datos($base) as $key) {
		?>
				<form id="busqueda" method="post" action="../controlador/editar_noti.php?id=<?php echo $key['id'];?>&lang=<?php echo $lan;?>">
					Antetítulo	<input id="ingresar" type="text" name="ant_titulo" value="<?php echo $key['ant_titu']; ?>" ><br/>
					Titulo    <input id="ingresar" type="text" name="titulo" value="<?php echo $key['titulo']; ?>" ><br/>
					Sumario	<textarea id="biografia" type="text" name="sumario"><?php echo $key['sumario']; ?></textarea><br/>
					Autor    <input id="ingresar" type="text" name="autor" value="<?php echo $key['autor']; ?>" ><br/>
					Noticia <textarea id="biografia" type="text" name="noticia"><?php echo $key['noticia']; ?></textarea><br/>
					<input type="submit" id="enter" value="Actualizar">
				</form>
		<?php
			}
			}else{
				?>
				<form id="busqueda" method="post" action="../controlador/editar_noti1.php?lang=<?php echo $lan;?>">
					Antetítulo	<input id="ingresar" type="text" name="ant_titulo" ><br/>
					Titulo    <input id="ingresar" type="text" name="titulo" ><br/>
					Sumario	<textarea id="biografia" type="text" name="sumario" ></textarea><br/>
					Autor    <input id="ingresar" type="text" name="autor" ><br/>
					Noticia <textarea id="biografia" type="text" name="noticia" ></textarea><br/>
					<input type="submit" id="enter" value="Agregar">
				</form>
		<?php
			}
			

	?>
			
			
		</article>
		<?php include "social_noti.php";?>
	</section>

<?php	include "footer_2.php";
 include "copr.php";
?>