<?php

require_once('../../modelo/modelo.php');

class News extends ConnectionSql

{
	function noticia($key){


		$salida = "";
		$salida = $salida . '<ul><center><div class="mostrar_noticia">';

		$salida = $salida . '<img src="' . $key["imagen"] . '" alt=" '. $key["titulo_e"] . '"' . '<br>';
		$salida = $salida . '<h2>' . $key["titulo_e"] . '</h2>';
		$salida = $salida . '<p>' . $key["noticia"] . '</p>';
		$salida = $salida . '<a href="news.php?id=' . $key["id"] .'">' . '<button type="button">Ver más! </button></a>' ;
		$salida = $salida .	'</div></center><br></ul>';


		return $salida;

	}

	public function traer_noti1()
		{
			if (isset($_GET['id'])) $this->id = $_GET['id'];
			$this->data = "SELECT * FROM noticias WHERE noticias.id = '$this->id'";
			return $this->data;
		}

	public function traer_noti2()
		{
			
			$this->data = "SELECT * FROM noticias";
			return $this->data;
		}
}







?>