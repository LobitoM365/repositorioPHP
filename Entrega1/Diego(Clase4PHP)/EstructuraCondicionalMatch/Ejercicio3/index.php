<?php

$letra = readline("Po favor ingrese una letra:  ");

$resultado = match(strtolower($letra)){
    "a"  => "La letra $letra es una vocal",
    "e"  => "La letra $letra es una vocal",
    "i"  => "La letra $letra es una vocal",
    "o"  => "La letra $letra es una vocal",
    "u"  => "La letra $letra es una vocal",
    default => "La letra $letra es una consonante"
 };

 echo $resultado;