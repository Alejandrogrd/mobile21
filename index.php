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


<?php   // Obteniendo listado de todos los productos
    
    $url = "http://pymesv.com/datos07new/listar_productos.php";
    $datosJ = file_get_contents($url);
    $rows = json_decode($datosJ,true);
        
    echo "<ul class='table-view'>";

            if (isset($_POST['rel']))
      {
        echo "<p style='color: #aaaaa;'> Su producto "  .$_POST['rel']. "   fue agregado exitosamente</p>";
      }


          for($i=0;$i<count($rows);$i++) {
              echo "<li class='table-view-cell media'><a href='#' class='navigate-right'>".$rows[$i]['nombre_producto'];
              echo "<img class='media-object pull-left' src='https://gitlab.com/jcrlosvn/ShoppingCar/raw/master/recursos/imagenes/".$rows[$i]["imagen_producto"]."'>";   
              echo "<p> Precio: ".$rows[$i]["precio_producto"]."</p>";
              echo "</a></li>";      
          }

          echo "</ul>"; 
 ?>


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
</body>
</html>