<?php 
include "head_noti_2.php";

include "../controlador/controlador_news.php";?>
	<section class="section_news">
		<article class="news">
			<?php 
			
			include "../controlador/controlador_news1.php";

				$nombre = "noti";
				$td = "noticias";
				$news1 = new News;
				$news1->traer_noti2();
				
				if (empty($news1->datos($base))) {
					?>
					<div class="news_vacia">
						<div class="news_vacia1">
							<center>
								<h2>No hay noticias en esta sección</h2>
								<span class="comunication1">
									<h5>INSERTAR NUEVA</h5>
									<a href="modificar_news2.php?lang=<?php echo $lan;?>"><img src="../../images/agregar.png" ></a>
								</span>
							</center>
						</div>
					</div>

					<?php
					
				}else{
					if (isset($_GET['id'])) {
						$news2 = new News;
						$news2->traer_noti1();


						foreach ($news2->datos($base) as $key){

							?>
						   	<div class="noti_e">
						   		<div class="ant_titu"><h5><?php echo $key['ant_titu'];?></h5></div>
						   		<div class="titulo_e"><h1><?php echo $key['titulo'];?></h1></div>
						   	<?php
						   		if (empty($key['img'])) {
						   	?>
						   			
						   			<a href="modificar_news_img.php?id=<?php echo $key['id'];?>&nam=<?php echo $nombre;?>&td=<?php echo $td?>&gen=<?php echo $key['id'];?>&lang=<?php echo $lan;?>"><img src="../../images/editar_imagen.png"/></a>
						   	<?php
						   		}else{
						   	?>		<img src="<?php echo $key['img'];?>" width="100%" height="100%">
						   			<a href="modificar_news_img.php?id=<?php echo $key['id'];?>&nam=<?php echo $nombre;?>&td=<?php echo $td?>&gen=<?php echo $key['id'];?>&lang=<?php echo $lan;?>"><img src="../../images/editar_imagen.png" /></a>
						   	<?php
						   		}
						   	?>
						   		<div class="sumario"><h3><?php echo $key['sumario'];?></h3></div>
						   		<div class="ant_titu"><h3><?php echo $key['autor'];?></h3></div>
						   		<div class="noticia_p"><p align="justify"><?php echo nl2br($key['noticia']);?></p></div>
						   		<br/>
						   		<a href="modificar_news2.php?id=<?php echo $key['id'];?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
						   		<a href="../controlador/eliminar.php?id=<?php echo $key['id'];?>&td=<?php echo $td?>&lang=<?php echo $lan;?>"><img src="../../images/eliminar.png" /></a>
						   	</div>	

						   <?php
						}
						
					}else{
						$news1 = new News;
						$news1->traer_noti2();
						$reverse = array_reverse($news1->datos($base));
						foreach ($reverse as $key){
							?>
							<a href="modificar_news1.php?id=<?php echo $key['id'];?>&lang=<?php echo $lan;?>">
						   	<div class="noti_g noti_g_w noti_size">
						   		<div class="sumario"><?php echo $key['fecha'];?></div>
						   		<div class="titulo_e"><a href="modificar_news1.php?id=<?php echo $key['id'];?>&lang=<?php echo $lan;?>"><h2><?php echo $key['titulo'];?></a></h2></div>
						   		<img src="<?php echo $key['img'];?>" width="100%" height="100%">
						   		<div class="sumario"><h3><?php echo $key['sumario'];?></h3></div>
						   	</div>
						   	</a>
						   <?php
						} 
					}
					?>
					
					<br/>
						<div class="news_vacia1">
							<center>
								
								<span class="comunication1">
									<h5>INSERTAR NUEVA</h5>
									<a href="modificar_news2.php?lang=<?php echo $lan;?>"><img src="../../images/agregar.png" ></a>
								</span>
							</center>
						</div>
						<?php
				}
			?>
			
			
		</article>
		<?php	include "social_noti.php";?>	
	</section>
	<?php include "copr.php";?>
</body>

</html>