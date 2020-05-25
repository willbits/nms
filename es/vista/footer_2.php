<?php 
		
    		if (!isset($_SESSION['idusuario']) and !isset($_SESSION['nombre'])){ 
?>
			    <script languaje="Javascript">
					alert("¡Usted cerro sesión!");
					window.document.location="../vista/index.php";
				</script>
<?php
    		}
?>
<footer>
			<center><a id="nms"><div><img src="../../images/nms.png" width="100%" height="100%" /></div></a></center>
			<div class="menu" >
				<center>
						<a class="principal" href="inicio.php?lang=<?php echo $lan;?>"><div>Bienvenido <?php echo $_SESSION['nombre'];?></div></a>
						<a class="principal" href="modifica_words.php?lang=<?php echo $lan;?>"><div>MODIFICAR</div></a>
						<a class="principal" href="modificar_team.php?lang=<?php echo $lan;?>"><div>EL EQUIPO</div></a>
						<a class="principal" href="modificar_news1.php?lang=<?php echo $lan;?>"><div>NOTICIAS</div></a>
						<a class="principal" href="index.php?lang=<?php echo $lan;?>"><div>CERRAR SESIÓN</div></a>
					
				</center>
			</div>
	</footer>

</body>
</html>