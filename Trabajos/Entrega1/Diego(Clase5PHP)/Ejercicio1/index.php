<?php

$numero = readline("Por favor ingrese la cantidad de numero que necesitas:  ");
echo "\n";
$contador = 0;
$suma = 0;
for ($x = 1; $x <= $numero; $x++) {
    $contador = $contador + 1;
    $numeros = floatval( readline("Por favor ingresa la nota $x:  "));
    $suma = $suma + $numeros;
}
$promedio = $suma / $numero;
echo "\nLa suma de los numeros ingresados es : $suma \n" ."El promedio de los numeros ingresados es: $promedio \n";
