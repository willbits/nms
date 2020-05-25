<?php

include_once("codigo_registro.php");

	$pnom = $_POST['primer_nom'];
	$snom = $_POST['segun_nom'];
	$pap = $_POST['primer_ap'];
	$sap = $_POST['segun_ap'];
	$nac = $_POST['nacional'];
	$num_ced = $_POST['cedula'];
	$exped = $_POST['expediente'];
	$correo = $_POST['correo'];
	$edo = $_POST['estado'];
	$city = $_POST['ciudad'];
	$muni = $_POST['mncpio'];
	$parro = $_POST['prrqia'];
	$sector = $_POST['sector'];
	$calle = $_POST['calle'];
	$vivienda = $_POST['tipo_hogar'];
	$ncasa = $_POST['num_casa'];
	$local = $_POST['num_local'];
	$cel = $_POST['num_cel'];

	$ejecutar = new conexion;

		$ejecutar->crear_tabla();

	$ejecutar->cerrar();

	$ejecutar = new conexion;

		$ejecutar->registrar($pnom,$snom,$pap,$sap,$nac,$num_ced,$exped,$correo,$edo,$city,$muni,$parro,$sector,$calle,$vivienda,$ncasa,$local,$cel,6);

	$ejecutar->cerrar();

	$ejecutar = new conexion;

		$ejecutar->mostrar_registro($num_ced);

	$ejecutar->cerrar();


?>