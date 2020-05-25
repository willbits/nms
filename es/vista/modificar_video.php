<?php session_start();
include "head.php";
$news_id = $_GET["id"];
$nombre = $_GET["nam"];
$td = $_GET["td"];
require_once('../controlador/valida.php');

?>
<div class="modificar">

			<form action="../controlador/controlador_videos.php?id=<?php echo $news_id;?>&nam=<?php echo $nombre;?>&td=<?php echo $td?>&lang=<?php echo $lan;?>" method="POST" enctype="multipart/form-data">
				
    			Select video to upload:
    			<input type="file" name="video" id="video" />
    			<input type="submit" value="Upload Video" name="submit" />
			</form>


</div>

<?php 
	include "footer_2.php";
	include "copr.php";
?>