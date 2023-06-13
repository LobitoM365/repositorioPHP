<?php

$numero1 = readline("Ingrese un número ");
$numero2 = readline("Ingrese un número ");

if ($numero1 > 10 && $numero2 > 10) {
    echo "Ambos números son mayores que 10";
} else if ($numero1 < 10 && $numero2 < 10) {
    echo "Ninguno de los números es mayor que 10";
} else if ($numero1 > 10 && $numero2 < 10 || $numero2 > 10 && $numero1 < 10) {
    echo "Solo uno de los números es mayor que 10";
}


