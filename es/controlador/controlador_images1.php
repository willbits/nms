<?php
include "language_1.php";
$target_dir = "C:/wamp64/www/nms3/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
require_once('../controlador/controlador_words.php');



if(isset($_POST["submit"])) {
    $id = $_GET["id"];
    $nombre = $_GET["nam"];
    $tabla = $_GET["td"];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $nombre  . $id . '.jpg')) {
        $dir = "../../images/" . $nombre . $id . ".jpg";
        $act = new words;
        $act->actualizar($dir,$tabla);
        
        ?>
        <script languaje="Javascript">
                    alert("¡El archivo fue correctamente cargado!");
                    window.document.location="../vista/inicio.php?lang=<?php echo $lan;?>";
        </script>
        <?php
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>