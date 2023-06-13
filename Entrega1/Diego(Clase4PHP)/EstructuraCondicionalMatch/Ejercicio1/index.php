<?php

$numero = readline("Por favor ingrese un numero entero entre 1 y 3:  ");

$resultado = match((int)$numero) {
    1 => "El número ingresado es uno",
    2 => "El número ingresado es dos",
    3 => "El número ingresado es tres",
    default => "No se reconoce el número ingresado."
};

echo $resultado;