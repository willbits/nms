<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<?php
require_once('../controlador/controlador_words.php');
$busca = new words;
$busca->traer_words1("1");
foreach ($busca->datos($base) as $key) {
?>
    <a class="principal" href="index.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
<?php
}

$busca = new words;
$busca->traer_words1("2");
foreach ($busca->datos($base) as $key) {
?>
    <a  href="nms_bio.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
<?php
}

$busca = new words;
$busca->traer_words1("3");
foreach ($busca->datos($base) as $key) {
?>
    <a  href="team.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
<?php
}

$busca = new words;
$busca->traer_words1("4");
foreach ($busca->datos($base) as $key) {
?>
    <a  href="news.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
<?php
}

$busca = new words;
$busca->traer_words1("7");
foreach ($busca->datos($base) as $key) {
?>
    <a  href="contact.php?lang=<?php echo $lan;?>"><div><?php echo $key['palabra'];?></div></a>
<?php
}
?>

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