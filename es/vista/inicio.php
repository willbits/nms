<?php session_start(); 

        

		include "head.php";

		include "session.php";

		include "red_social.php";

        include "language_mod.php";

		include "header_2.php";

		include "footer_2.php";

		include "../controlador/controlador_news.php";?>
    <center>
    	<section id="deslizar" class="news_index">
            <?php 
            foreach ($news1->datos($base) as $key){
            	echo portada2($key);
         	} ?>
    	</section>
    </center>
<script>
<?php include "copr.php";?>
var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>