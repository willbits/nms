<?php
      session_start();
              if (isset($_SESSION['idusuario'] ) and isset($_SESSION['nombre'])){
                header("Status: 301 Moved Permanently");
				header("Location: ../vista/inicio.php");

              }else{
              ?>
              	<script languaje="Javascript">
				 	alert("¡Usted cerro sesión!");
				 	window.document.location="../vista/index.php";
				</script>
			<?php
                header("Status: 301 Moved Permanently");
				header("Location: ../vista/index.php");
              }
          ?>
