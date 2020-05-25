<?php

include "valida.php";

$news1 = new Us_valida;
$news1->traer_noti();

function portada($key){

include "language_1.php";
$salida = "";
$salida = $salida . '<ul><a href="seccion.php?id=' . $key["id"] .'&lang=' . $lan .'"><center><div class="mostrar_noticia">';

$salida = $salida . '<img src="' . $key["img"] . '" alt=" '. $key["titulo"] . '">';
$salida = $salida . '<div class="titulo_seccion"></div>';
$salida = $salida .	'</div></a></center><br></ul>';


return $salida;

}

function portada2($key){

include "language_1.php";
$nombre = "poster";
$t_sect = "noti_g";
$salida = "";
$salida = $salida . '<a href="../vista/modificar_sect.php?id=' . $key["id"] .'&lang=' . $lan .'"><ul><center><div class="mostrar_noticia">';

$salida = $salida . '<img src="' . $key["img"] . '" alt=" '. $key["titulo"] . '">';
$salida = $salida .	'</div><a href="../vista/modificar_news_img.php?id=' . $key["id"] . '&nam='. $nombre . '&td=' . $t_sect . '&lang=' . $lan . '"><div class="edita_logo"><img src="../../images/editar_imagen.png" /></div></a></center><br></ul></a>';


return $salida;

}


?>