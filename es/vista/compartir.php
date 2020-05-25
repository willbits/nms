




<html>
<head>
  <title></title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://www.nmsvenezuela.com/es/vista/news.php?id=<?php echo $id?>" />
  <meta property="og:type"          content="article" />
  <meta property="og:title"         content="<?php echo $titulo;?>" />
  <meta property="og:description"   content="Prueba" />
  <meta property="og:image"         content="../../images/2_YOANYS_PADRON.jpg" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" data-href="https://www.nmsvenezuela.com/es/vista/news.php?id=<?php echo $id;?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank"  class="fb-xfbml-parse-ignore">Compartir</a></div>

</body>
</html>