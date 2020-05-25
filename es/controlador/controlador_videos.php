<?php

// Check if image file is a actual image or fake image
include "controlador_section.php";
include "language_1.php";

if(isset($_FILES)) {
    $id = $_GET["id"];
    $nombre = $_GET["nam"];
    $tabla = $_GET["td"];

    $target_dir = "C:/wamp64/www/nms3/video_".$lan."/";
    $target_file = $target_dir . basename($_FILES["video"]["name"]);


    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir . $nombre . $id . '.mp4')) {
     $dir = "../../video_".$lan."/" . $nombre . $id . ".mp4";
     $act = new Section;
     $act->actualiza_video($dir,$tabla);
     
     ?>
     <script languaje="Javascript">
        alert("¡El archivo fue correctamente cargado!");
        window.document.location="../vista/inicio.php?lang=<?php echo $lan;?>";
     </script>
    <?php
        
} else {
    if (UPLOAD_ERR_OK == false) {
        echo "error al subir";
    }

    if (UPLOAD_ERR_NO_FILE) {
        echo "no hay ningun fichero";
    }
    echo "Sorry, there was an error uploading your file.";
    print_r($_FILES['video']['error']);
 }
    
}




?>