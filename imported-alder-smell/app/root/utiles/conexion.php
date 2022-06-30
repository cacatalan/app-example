<?php

function fnArchivo( $nombre ) {
    if( file_exists($nombre) )
        return $nombre ;
    return false ;
}