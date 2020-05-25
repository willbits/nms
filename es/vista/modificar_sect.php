<?php session_start();
	include "head.php";

    include "red_social.php";

    if (isset($_GET['id'])) {
    	$sect = $_GET['id'];

    	include "../controlador/controlador_section.php";
    	switch ($sect) {
		    case 1:
		    	$t_sect = "sect_1";
		    	$nombre = "nms_vivo";
		    	include "section_mod.php";
		        break;
		    case 2:
		        $t_sect = "sect_2";
		        $nombre = "mundo_art";
		    	include "section_mod.php";
		        break;
		    case 3:
		        $t_sect = "sect_3";
		        $nombre = "como_hizo";
		    	include "section_mod.php";
		        break;
		    case 4:
		        $t_sect = "sect_4";
		        $nombre = "nues_lente";
		    	include "section_mod.php";
		        break;
		    case 5:
		        $t_sect = "sect_5";
		        $nombre = "decibeles";
		    	include "section_mod.php";
		        break;
		    case 6:
		        $t_sect = "sect_6";
		        $nombre = "huella";
		    	include "section_mod.php";
		        break;
		    case 7:
		       	$t_sect = "sect_7";
		       	$nombre = "repro";
		    	include "section_mod.php";
		        break;
		    case 8:
		       	$t_sect = "sect_8";
		       	$nombre = "festivales";
		    	include "section_mod.php";
		        break;
		}
    }

    include "footer_2.php";
    include "copr.php";
?>