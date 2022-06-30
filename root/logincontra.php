<?php
  
  $form = (object)$_POST ;
  session_start() ;

  $usuariosValidos = [
    "admin" => "admin"
    , "editor" => "1234"
    , "pablito101" => "suma1000"
  ];

  /*// $_SESSION
  if( $form->nmContra == "hola123" ) {
    $_SESSION["usuario"] = "Administrador" ;
  }
  else if( $form->nmContra == "editor" ) {
    $_SESSION["usuario" ] = "Editor" ;
  }
  else {
    
  }*/

  if( 
    isset(
      $usuariosValidos[ $form->nmUsuario ]
    ) // Esto devuelve la contraseña
  ) {
    if( 
      $usuariosValidos[$form->nmUsuario] 
      == 
      $form->nmContra
    ) {
      $_SESSION["usuario"] = $form->nmUsuario ;
      $_SESSION["error"] = "" ; // Quitar cualquier error
    }
    else {
      $_SESSION["error"] = "err=Contraseña no válida" ;
    }
  }
  else {
    $_SESSION["error"] = "err=Usuario no existente" ;
  }

  header( "Location: index.php?" . $_SESSION["error"] ) ;



