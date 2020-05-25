<?php

	include "head.php";
	require_once('../controlador/controlador_words.php');

?>
	<header class="header">
		<div id="map"></div>
		<div class="informacion">
			<div class="informacion1">
				<center>
					<img src="../../images/house.png">
				<?php
				$busca1 = new words;
				$busca1->traer_words1("8");
				foreach ($busca1->datos($base) as $key) {
				?>
					<h2><?php echo $key['palabra'];?></h2>
								</center>
				<br/>

				<h4><?php echo nl2br($key['descripcion']);?></h4>
				<?php
				}
				?>
			</div>
		</div>
	</header>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
			  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

<?php include "red_social.php"; ?>


	<div class="telf">
		<div class="comunication1">
			<center>
				<div class="img_tlf">
					<span><img src="../../images/telefono.png" ></span>
					<?php
					$busca1 = new words;
					$busca1->traer_words1("7");
					foreach ($busca1->datos($base) as $key) {
					?>
					<p><?php echo $key['descripcion'];?></p> 
					<?php
					}
					?>
				</div>
				<div class="tlf">
					 <!--<form id="busqueda" method="post" action="../controlador/editar.php?id=&lang=<?php echo $lan;?>">
						Nombre    <input id="ingresar" type="text" name="nombre" value="">
						Apellido  <input id="ingresar" type="text" name="apellido" value="">
						Correo  <input id="ingresar" type="text" name="apellido" value="">
						Asunto  <input id="ingresar" type="text" name="apellido" value="">
						Mensaje <textarea id="biografia" type="text" name="biografia" ></textarea><br/>
						
						<input type="submit" id="enter" value="Modificar">
					</form>-->
				</div>
				<div class="correo">
					<span><img src="../../images/sobre.png" ></span>
					<?php
					$busca1 = new words;
					$busca1->traer_words1("2");
					foreach ($busca1->datos($base) as $key) {
					?>
					<p><?php echo $key['descripcion'];?></p> 
					<?php
					}
					?>
				</div>
			</center>
			  
		</div>
		
	</div>

	
	
<?php
	include "footer.php";
	include "copr.php";
?>
