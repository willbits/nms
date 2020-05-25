<header class="header_slide">
		<center>
			<div class="slide">
				<?php 
			require_once('../controlador/controlador_words.php');
			$img = new words;
			$img->traer_img();

			if (!empty($img->datos("nmspro_nms"))) {
            	foreach ($img->datos("nmspro_nms") as $key){
            	
            		?>
            		<img class="deslizar" src="<?php echo $key['img'];?>" />
            		<?php
            	}
         	} 
         	?>
				
				
				<button class="button left" onclick="plusDivs(-1)">&#10094;</button>
	  			<button class="button right" onclick="plusDivs(1)">&#10095;</button>
	  			
			</div>
		</center>

		<script>
			var slideIndex = 1;
			var myIndex = 0;
			showDivs(slideIndex);

			function plusDivs(n) {
			  showDivs(slideIndex += n);
			}

			function showDivs(n) {
			  var i;
			  var x = document.getElementsByClassName("deslizar");
			  if (n > x.length) {
			  	slideIndex = 1
			  }    
			  if (n < 1) {
			  	slideIndex = x.length
			  }
			  for (i = 0; i < x.length; i++) {
			     x[i].style.display = "none";  
			  }
			  x[slideIndex-1].style.display = "block";  
			}
			
			carousel();

			function carousel() {
			    var i;
			    var x = document.getElementsByClassName("deslizar");
			    for (i = 0; i < x.length; i++) {
			       x[i].style.display = "none";  
			    }
			    myIndex++;
			    if (myIndex > x.length) {myIndex = 1}    
			    x[myIndex-1].style.display = "block";  
			    setTimeout(carousel, 5000); // Change image every 2 seconds
			}
		</script>
	</header>