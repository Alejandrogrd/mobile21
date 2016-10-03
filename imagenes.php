<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ratchet template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="css/ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.js"></script>
  </head>
  <body>


<div class="slider" id="mySlider">
  <div class="slide-group">
    <div class="slide">
      <img src="img/img.png">
      <span class="slide-text">
        <span class="icon icon-left-nav"></span>
        Slide me
      </span>
    </div>
    <div class="slide">
      <img src="img/img.png">
    </div>
    <div class="slide">
      <img src="img/img2.jpg">
    </div>
  </div>
</div>
<nav class="bar bar-tab">
  <a class="tab-item active" href="index.php">
    <span class="icon icon-home"></span>
    <span class="tab-label">Inicio</span>
  </a>
  <a class="tab-item" href="contactos.php">
    <span class="icon icon-person"></span>
    <span class="tab-label">Contactanos</span>
  </a>
  <a class="tab-item" href="sobre.php">
    <span class="icon icon-star-filled"></span>
    <span class="tab-label">Sobre Nosotros</span>
  </a>
  <a class="tab-item" href="imagenes.php">
    <span class="icon icon-search"></span>
    <span class="tab-label">Imagenes</span>
  </a>
  <a class="tab-item" href="ubicacion.php">
    <span class="icon icon-gear"></span>
    <span class="tab-label">Ubicaciones</span>
  </a>
</nav>