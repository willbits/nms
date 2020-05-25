<!DOCTYPE html>
<html>
<head>
	<title>NMS Producciones</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-sacale=1.0, user-scalable=no">
  <meta name="description" content="Acompaña, desde la irreverencia, a muchas otras casas productoras para lograr la realización y la difusión en todos los medios y plataformas digitales posibles, el contenido creado para la reconquista de lo humano en un mundo hipersaturado de banalidades. " />
  <meta name="nosnippet">
  
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
	<link  rel = "shortcut icon"  href = "../../images/favicon.ico"  type = "image / x-icon" > 
	<link  rel = "icono"  href = "../../images/favicon.ico"  type = "image / x-icon" >
	
	<script>
      function initMap() {
        var uluru = {lat: 10.5093811, lng: -66.918076};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

		
			
    </script>
    <script type="text/javascript">
    	window.onscroll = function() {barra()};

		function barra() {
    		if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
          if ((window.innerWidth)>600) {
            document.getElementById("deslizar").className = "cambiar_news";
          }else{
            document.getElementById("deslizar").className = "cambiar_news1";
          }
       	 			

    		} 
    		
    	}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS3nF1MEGDU-KrJfPmGFQQeLD-FLB9tVE&callback=initMap">
    </script>
</head>
<body>

  <?php include "../controlador/language_1.php";?>