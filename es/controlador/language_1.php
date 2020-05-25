<?php
	if (isset($_GET['lang'])) {
		switch ($_GET['lang']) {
			case 'es':
				$base = "nmspro_nms";
				$lan = "es";
				break;

			case 'eo':
				$base = "nmspro_nms_eo";
				$lan = "eo";
				break;

			case 'en':
				$base = "nmspro_nms_en";
				$lan = "en";
				break;

			case 'ru':
				$base = "nmspro_nms_ru";
				$lan = "ru";
				break;
			
			default:
				$base = "nmspro_nms";
				$lan = "es";
				break;
		}
	}else{
		$base = "nmspro_nms";
				$lan = "es";
	}
?>