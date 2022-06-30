<html>
  <head>
    <title></title>
    <link rel="icon" href="icono.png" />
    <link rel="stylesheet" href="/css/sistema.css" >
    <link rel="stylesheet" href="/css/libro.css" >
    <meta charset="utf-8" />
    <meta 
          name="viewport"
          content="width=device-width,user-scalable=no"
    />
  </head>
  
  <header>
  <div class="loader"></div>
  <div class="bgwrap">   
  <div class="bgmove">
  </div>
  <div class="text">LIBROS DE TERROR</div>
  </div>
  

  
    </header>

  
  <body>

    <header class="encabezado" >
      <span>
        Bienvenido usuario <?= $_SESSION["usuario"] ?>
      </span>
      
      
      <div class= "cerrarsesion"> </d>  <a href="logout.php" >Cerrar sesión</a> </>    </div>
      
      
    <div class="agregarnuevolibro" > </d>     <a href="nuevolibro.html">Agregar un libro nuevo</a> </div>

    </header>
    <main>
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
      foreach( $resultado as $x ) 
      
      
      {
          include "libros.php";
      }
       

      ?>
    </main>
  </body>

  <div class="ingresa">
    

  <footer>
  
    <p>
      D'andrea, García, Pellegrino , Pizarro , Ramirez, Rodriguez.
    </p>
  </div>
    
    
  </footer>

</html>



<style>

  header {
    
    background-color: black;
    padding:30px;
    
  } 
  
  span { 
     background-color: grey;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: px;
    text-align: center;
    font-size:30px;
  }
  
  .cerrarsesion {
    
    background-color: #dc6565;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius:40px;
    box-shadow: 5px 5px 20px #666;
    float: right;

  }
  
  
  
  
  .agregarnuevolibro {
    
     background-color: #dc6565;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius:40px;
    box-shadow: 5px 5px 20px #666;
    float: right;
  }
  
  .ingresa{
    color: white;
    font-size: 25px;
    padding: 0px;
    margin: 0px;
    border-radius: 0px;
  }
  
  
  
</style>