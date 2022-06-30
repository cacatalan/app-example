<?php

  session_start() ; 
  // $_SESSION[] 
  if( isset( $_SESSION["usuario"] ) ) {
    include "./includelogeado.php" ;
  }
  else
  {
    include "./indexusuariocomun.php" ;
  }


