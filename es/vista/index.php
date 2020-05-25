<?php
	session_start();
						
    	if (isset($_SESSION['idusuario'])){ 
    		session_destroy();
    		session_unset();
    		$_SESSION['idusuario'] = "";

    	}

        

		include "head.php";

        include "red_social.php";

        include "language.php";

		include "session.php";

		

		include "header.php";



		include "footer.php";

        include "../controlador/controlador_news.php";?>
    <center>
    <section id="deslizar" class="news_index">
            <?php 
            foreach ($news1->datos($base) as $key){
            echo portada($key);
         } ?>
            
    </section>
    </center>
    <?php include "copr.php";?>
<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

