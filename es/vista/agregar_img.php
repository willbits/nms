<?php session_start();
include "head.php";

$nombre = $_GET["nam"];
$td = $_GET["td"];
require_once('../controlador/valida.php');

?>
<div class="modificar">

			<form action="../controlador/controlador_images1.php?nam=<?php echo $nombre;?>&td=<?php echo $td?>&lang=<?php echo $lan;?>" method="post" enctype="multipart/form-data">
    			Select image to upload:
    			<input type="file" name="fileToUpload" id="fileToUpload">
    			<input type="submit" value="Upload Image" name="submit">
			</form>


</div>

<?php include "footer_2.php";
		include "copr.php";
?>