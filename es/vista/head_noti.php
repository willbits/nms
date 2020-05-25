
<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
	<meta charset="UTF-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-sacale=1.0, user-scalable=no" />

	
  
  
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
	<link  rel = "shortcut icon"  href = "../../images/favicon.ico"  type = "image / x-icon" > 
	<link  rel = "icono"  href = "../../images/favicon.ico"  type = "image / x-icon" >
	
</head>
<body>
<?php 
include "../controlador/language_1.php";
include "red_social.php";
include "menu.php";	
require_once('../controlador/controlador_words.php');
?>


	<header class="encabezado_news">
		<div class="titu_encab">
			<?php
			$busca = new words;
			$busca->traer_words1("4");
			foreach ($busca->datos($base) as $key) {
			?>
			    <center><h1><?php echo $key['palabra'];?></h1></center>

			
		</div>
	</header>
	<nav class="menu_news">
		<ul class="menu_news1">

			<li class="menu_news2"><span class="idioma" onclick="openNav()" align="center">&#9776; <?php echo $key['descripcion'];?></span></li>
		</ul>
		<?php
			}
		?>
	</nav>
