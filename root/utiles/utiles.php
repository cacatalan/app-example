<?php

function fnRecuperar( $nombre_archivo, $separador="\t" ) {
    $archivo = fnArchivo( $nombre_archivo ) ;
    if( $archivo ) {
        $contenido = file_get_contents( $archivo ) ;
        $renglones = explode( "\n" ) ;
        $renglon_titulos = array_shift( $renglones ) ;
        $titulos = explode( $separador, $renglon_titulos ) ;
        $registros = [] ;
        foreach( $renglones as $cada_renglon ) {
            $datos = explode( $separador, $cada_renglon ) ;
            $este_registro = [] ;
            foreach( $datos as $orden => $cada_dato ) {
                $este_registro
                    [ trim($titulos[$orden]) ]
                    = 
                    trim( $cada_dato )
                ;
            }
            $registros[] = (object)$este_registro ;
        }
        return $registros ;
    }
    return ["ERROR"] ;
}