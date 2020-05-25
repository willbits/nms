<?php
$lang = array("es","eo","en");
if (isset($_GET['lang'])) {
  switch ($_GET['lang']) {
    case 'es':
      ?>
        <div class="dropdown">
        <div class="position_right">
          <button onclick="idioma()" class="dropbtn"><img src="../../images/flag_venezuela.png" width="20%" height="20%" />ES</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="../../es/vista/index.php?lang=es" style="background-color: rgb(125,125,125);"><img src="../../images/flag_venezuela.png" width="15%" height="15%" />ES</a>
            <a href="../../es/vista/index.php?lang=eo"><img src="../../images/flag_esperanto.png" width="15%" height="15%" />EO</a>
            <a href="../../es/vista/index.php?lang=en"><img src="../../images/flag_usa.png" width="15%" height="15%" />EN</a>
            <a href="../../es/vista/index.php?lang=ru"><img src="../../images/flag_ru.png" width="15%" height="15%" />RU</a>
          </div>
        </div>
      </div>
      <?php
      $base = "nmspro_nms";
      break;

    case 'eo':
      ?>
        <div class="dropdown">
        <div class="position_right">
          <button onclick="idioma()" class="dropbtn"><img src="../../images/flag_esperanto.png" width="20%" height="20%" />EO</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="../../es/vista/index.php?lang=es"><img src="../../images/flag_venezuela.png" width="15%" height="15%" />ES</a>
            <a href="../../es/vista/index.php?lang=eo" style="background-color: rgb(125,125,125);"><img src="../../images/flag_esperanto.png" width="15%" height="15%" />EO</a>
            <a href="../../es/vista/index.php?lang=en"><img src="../../images/flag_usa.png" width="15%" height="15%" />EN</a>
            <a href="../../es/vista/index.php?lang=ru"><img src="../../images/flag_ru.png" width="15%" height="15%" />RU</a>
          </div>
        </div>
      </div>
      <?php
      $base = "nmspro_nms_eo";
      break;

    case 'en':
      ?>
        <div class="dropdown">
        <div class="position_right">
          <button onclick="idioma()" class="dropbtn"><img src="../../images/flag_usa.png" width="20%" height="20%" />EN</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="../../es/vista/index.php?lang=es"><img src="../../images/flag_venezuela.png" width="15%" height="15%" />ES</a>
            <a href="../../es/vista/index.php?lang=eo"><img src="../../images/flag_esperanto.png" width="15%" height="15%" />EO</a>
            <a href="../../es/vista/index.php?lang=en" style="background-color: rgb(125,125,125);"><img src="../../images/flag_usa.png" width="15%" height="15%" />EN</a>
            <a href="../../es/vista/index.php?lang=ru"><img src="../../images/flag_ru.png" width="15%" height="15%" />RU</a>
          </div>
        </div>
      </div>
      <?php
      $base = "nmspro_nms_en";
      break;

      case 'ru':
      ?>
        <div class="dropdown">
        <div class="position_right">
          <button onclick="idioma()" class="dropbtn"><img src="../../images/flag_ru.png" width="20%" height="20%" />RU</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="../../es/vista/index.php?lang=es"><img src="../../images/flag_venezuela.png" width="15%" height="15%" />ES</a>
            <a href="../../es/vista/index.php?lang=eo"><img src="../../images/flag_esperanto.png" width="15%" height="15%" />EO</a>
            <a href="../../es/vista/index.php?lang=en"><img src="../../images/flag_usa.png" width="15%" height="15%" />EN</a>
            <a href="../../es/vista/index.php?lang=ru" style="background-color: rgb(125,125,125);"><img src="../../images/flag_ru.png" width="15%" height="15%" />RU</a>
          </div>
        </div>
      </div>
      <?php
      $base = "nmspro_nms_ru";
      break;
  }
}else{
?>
  <div class="dropdown">
    <div class="position_right">
      <button onclick="idioma()" class="dropbtn"><img src="../../images/flag_venezuela.png" width="20%" height="20%" />ES</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="../../es/vista/index.php?lang=es" style="background-color: rgb(125,125,125);"><img src="../../images/flag_venezuela.png" width="15%" height="15%" />ES</a>
        <a href="../../es/vista/index.php?lang=eo"><img src="../../images/flag_esperanto.png" width="15%" height="15%" />EO</a>
        <a href="../../es/vista/index.php?lang=en"><img src="../../images/flag_usa.png" width="15%" height="15%" />EN</a>
        <a href="../../es/vista/index.php?lang=ru"><img src="../../images/flag_ru.png" width="15%" height="15%" />RU</a>
      </div>
    </div>
  </div>
<?php
}
?>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function idioma() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>