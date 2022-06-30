<div class="los-productos">
  
<?php



  // Abrir archivo TSV principal.csv
  if( file_exists("./datos/principal.csv") ) {
      $separador = "," ;
      $archivo = file_get_contents( "./datos/principal.csv" ) ;
      $renglones = explode( "\n", $archivo ) ;
      if( count($renglones)>1 ) {
          $tit = explode( $separador, $renglones[0] ) ;
          $lista = [] ;
          for( $i = 1 ; $i < count($renglones) ; $i = $i+1 ) {
              $conjunto = [] ;
              $extraido = explode( $separador, $renglones[$i] ) ;
              foreach( $tit as $clave=>$titulo ) {
                  $conjunto[trim($titulo)] = trim( $extraido[$clave] ) ;
              }
              $lista[] = (object)$conjunto ;
          }
          $resultado = $lista ;
      }
       ;
  }
  else $resultado = [] ;

  // Generar código con ayuda del archivo de view libros.php
  foreach( $resultado as $x ) {
      include "libros.php" ;
  }
  
?>


  </div>
