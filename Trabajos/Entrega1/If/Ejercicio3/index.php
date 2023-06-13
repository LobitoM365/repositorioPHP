<?php

$nombre = readline("Por favor ingrese su nombre:  ");

if( $nombre == "Juan" || $nombre == "juan" || $nombre =="JUAN" ){
    echo "Hola $nombre";
} else{
    echo "Lo siento $nombre no te conozco";
}
