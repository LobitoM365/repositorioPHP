<?php

$numero = readline("Por favor ingrese un número:  ");

if ($numero < 10) {
    echo "El número $numero es menor a 10";
} else if ($numero > 10) {
    echo "El número $numero es mayor a 10";
} else {
    echo "El número $numero es igual a 10";
}
