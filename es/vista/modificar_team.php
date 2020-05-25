<?php session_start();
	include "head.php";
	include "menu_2.php";
?>
	<div class="boton_menu">
		<span onclick="openNav()" align="center" >&#9776; MENU</span>
	</div>
<?php
	include "red_social.php";
	require_once('../controlador/valida.php');	
?>
	<div class="bio">
		<div class="equipo">
			<img src="../../images/1_ALEJANDRO_YEPEZ.jpg">
			<?php
				$user = new Us_valida;
				$user->user("1");
				foreach ($user->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
				
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				} 
						
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/2_YOANYS_PADRON.jpg"><br/>
			<?php
				$us = new Us_valida;
				$us->user("6");
				foreach ($us->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto ">
				<p><?php
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				}
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/3_JIL_MICHEL.jpg"><br/>
			<?php
				$us1 = new Us_valida;
				$us1->user("8");
				foreach ($us1->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				}	
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/4 _THAY_MONIC.jpg"><br/>

			<?php
				$us2 = new Us_valida;
				$us2->user("9");
				foreach ($us2->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
				
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				} 
						
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/5_DANIELA_JIMENEZ.jpg"><br/>

			<?php
				$us3 = new Us_valida;
				$us3->user("2");
				foreach ($us3->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
				
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				} 
						
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/6_THAIRON_MARTINEZ.jpg"><br/>

			<?php
				$us4 = new Us_valida;
				$us4->user("10");
				foreach ($us4->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
				
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				} 
						
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/7_JAVIER_FARFAN.jpg"><br/>

			<?php
				$us5 = new Us_valida;
				$us5->user("3");
				foreach ($us5->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
				
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				} 
						
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
		<div class="equipo">
				<img src="../../images/8_OBED_RAMIREZ.jpg"><br/>

			<?php
				$us6 = new Us_valida;
				$us6->user("5");
				foreach ($us6->datos($base) as $key){
			?>

			<button class="nombre"><center><h2><?php echo $key['nombre'] . " " . $key['apellido'];?></h2></center></button>
			<div class="texto">
				<p><?php
				
					echo  "<h2>" . $key['cargo']. "</h2>";
					echo $key['biografia'];
				} 
						
					?></p>

					<a href="../vista/change.php?id=<?php echo $key['id']?>&lang=<?php echo $lan;?>"><img src="../../images/editar.png" /></a>
			</div>
		</div>
	</div>

	<script>
		function myFunction(id) {
		    var x = document.getElementById(id);
	
		    if (x.className.indexOf("visible") == -1) {
		        x.className += "visible";
		    } else { 
		        x.className = x.className.replace("visible", "");
		    }

		   
		}
	</script>
	
	
	<?php
		include "footer_2.php";
		include "copr.php";
	?>