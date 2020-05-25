<?php 
include "head_noti.php";
require_once('../controlador/controlador_words.php');

include "../controlador/controlador_news.php";?>
	<section class="section_news">
		<article class="news">
			<?php 
			
			include "../controlador/controlador_news1.php";

			if (isset($_GET["id"])) {
				$news = new News;
				$news->traer_noti1();
				if (empty($news->datos($base))) {
					?>

					<div class="news_vacia">
						<div class="news_vacia1">
							<center><h2>Disculpe aún no hay noticias en esta sección.</h2></center>
						</div>
					</div>

					<?php
					
				}else{
			
	            	$news1 = new News;
					$news1->traer_noti1();
					

					foreach ($news1->datos($base) as $key){
						
						?>
				   	<div class="noti_e">
				   		<div class="ant_titu"><h5><?php echo $key['ant_titu'];?></h5></div>
				   		<div class="titulo_e"><h1><?php echo $key['titulo'];?></h1></div>
				   		<img src="<?php echo $key['img'];?>" width="100%" height="100%">
				   		<div class="sumario"><h3><?php echo $key['sumario'];?></h3></div>
				   		<div class="ant_titu"><h3 align="right"><?php echo $key['autor'];?></h3></div>
				   		<div class="noticia_p"><p align="justify"><?php echo nl2br($key['noticia']);?></p></div>
				   		<meta property="og:url"           content="https://www.nmsvenezuela.com/es/vista/news.php?id=<?php echo $key['id'];?>" />
						<meta property="og:type"          content="webpage" />
						<meta property="og:title"         content="NMS Noticias" />
						<meta property="og:description"   content="<?php echo $key['sumario'];?>" />
						<meta property="og:image"         content="<?php echo $key['img'];?>" />
				   		<div id="fb-root"></div>
						<script>
							(function(d, s, id) {
							    var js, fjs = d.getElementsByTagName(s)[0];
							    if (d.getElementById(id)) return;
							    js = d.createElement(s); js.id = id;
							    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
							    fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>

						  <!-- Your share button code -->
						<div class="fb-share-button" data-href="https://www.nmsvenezuela.com/es/vista/news.php?id=<?php echo $key['id'];?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank"  class="fb-xfbml-parse-ignore">Compartir</a></div>
				   	</div>
				   <?php
					} 
				}
			}else{
				
				$news = new News;
				$news->traer_noti2();
				if (empty($news->datos($base))) {
					?>

					<div class="news_vacia">
						<div class="news_vacia1">
							<center><h2>Disculpe aún no hay noticias en esta sección.</h2></center>
						</div>
					</div>

					<?php
					
				}else{
			
	            	$news1 = new News;
					$news1->traer_noti2();
					
					$reverse = array_reverse($news1->datos($base));


					
					foreach ($reverse as $key){
						
						?>
						
				   	<div class="noti_g noti_g_w noti_size">
				   		<div class="sumario"><?php echo $key['fecha'];?></div>
				   		<div class="titulo_e"><a href="news.php?id=<?php echo $key['id'];?>&lang=<?php echo $lan;?>"><h2><?php echo $key['titulo'];?></a></h2></div>
				   		<img src="<?php echo $key['img'];?>" width="100%" height="100%">
				   		<div class="sumario"><h3><?php echo $key['sumario'];?></h3></div>
				   	</div>
				   <?php
					} 
					
				}
			}

			
	
			?>
			
			
		</article>
		<?php include "social_noti.php";?>
	</section>
	<?php include "copr.php";?>
</div>
</body>
</html>
