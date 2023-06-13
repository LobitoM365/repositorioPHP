<?php

$color = readline("Por favor ingrese el nombre de un color de las siguientes opciones: Amarillo, Azul o Rojo: ");


$resultado = match(strtolower($color)){
    "amarillo" => "El nombre en ingles del color seleccionado es yellow",
    "azul" => "El nombre en ingles del color seleccionado es blue",
    "rojo" => "El nombre en ingles del color seleccionado es red",
    default => "El color $color no se encuentra dentor de las opciones... Por favor seleccione una opcion disponible."
};

echo $resultado;