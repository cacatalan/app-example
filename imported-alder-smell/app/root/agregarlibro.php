<?php

  $libro = $_GET["libro"] ;
  $autor = $_GET["autor"] ;
  $categorias = $_GET["categorias"] ;
  $sinopsis = $_GET["sinopsis"] ;
  $lanzamiento = $_GET["lanzamiento"] ;
  $imagen = $_GET["imagen"] ;
  $precio = $_GET["precio"] ;
  
  $ENTER = "\n" ;
  file_put_contents(
    "./datos/principal.csv" // Nombre del archivo
    ,"$ENTER" . 21 . ",$libro,$autor,$categorias,$lanzamiento,$imagen,$sinopsis,$precio" // Contenido nuevo
    ,FILE_APPEND // Sin esto se pierde todo lo demás
  ); // Faltaba este punto y coma
// AHORA GENERA ERRORES

?>

<?php
include "./includelogeado.php" ;
