<?php
      session_start();
      include "language_1.php";
              if (isset($_SESSION['idusuario'] ) and isset($_SESSION['nombre'])){
                  header("Status: 301 Moved Permanently");
				header("Location: ../vista/inicio.php?lang=<?php echo $lan;?>");

              }else{
                header("Status: 301 Moved Permanently");
				header("Location: ../vista/index.php?lang=<?php echo $lan;?>");
              }
          ?>
