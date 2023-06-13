<?php

$texto = readline("Por favor ingrese una cadena de texto:  ");

$resultado = match(true){
    strlen($texto) > 10 => "La longitud del texto ingresado es largo",
    strlen($texto) > 5 => "La longitud del texto ingresado es media",
    strlen($texto) > 0 => "La longitud del texto ingresado es cortica",
    default => "Ingrese un valor válido"
};

echo $resultado;