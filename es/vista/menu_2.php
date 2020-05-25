<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a ><div><?php echo $_SESSION['nombre'];?></div></a>
  <a class="principal" href="inicio.php?lang=<?php echo $lan;?>"><div>INICIO</div></a>
            <a  href="nms_bio.php?lang=<?php echo $lan;?>"><div>NMS PRODUCCIONES</div></a>
            <a  href="modificar_team.php?lang=<?php echo $lan;?>"><div>EL EQUIPO</div></a>
            <a  href="modificar_news1.php?lang=<?php echo $lan;?>"><div>NOTICIAS</div></a>
            <a  href="contact.php?lang=<?php echo $lan;?>"><div>CONTACTO</div></a>
            <a class="principal" href="index.php?lang=<?php echo $lan;?>"><div>CERRAR SESIÓN</div></a>

</div>

<div id="main">
  

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main").style.marginLeft = "320px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "black";
}
</script>