<?php

$opcion = readline("Elija un número del 1 al 5: ");

$resultado = match ((int)$opcion) {
    1 => "Te ganaste un carro",
    2 => "Suerte para la próxima",
    3 => "Ganaste un computadro gamer",
    4 => "Sigue intentando",
    5 => "No ganaste algo",
    default => "Ingresa un número del 1 al 5"
};

echo $resultado;
