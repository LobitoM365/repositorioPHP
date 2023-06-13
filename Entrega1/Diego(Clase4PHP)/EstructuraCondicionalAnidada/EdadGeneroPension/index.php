<?php
$edad = readline("Por favor ingrese su edad:  ");
$genero = readline("Por favor ingrese su genero:  ");

if (strtolower($genero) == "masculino" and $edad > 0) {
    if ($edad >= 60) {
        echo "Querido usuario su edad es válida para recibir una pensión.";
    } else {
        echo "Querido usuario su edad no es aplicable para recibir una pensión";
    }
} else if (strtolower($genero) == "femenino" and $edad > 0) {
        if ($edad >= 54) {
        echo "Querido usuario su edad es válida para recibir una pensión.";
    } else {
        echo "Querido usuario su edad no es aplicable para recibir una pensión";
    }
} else {
    if (strtolower($genero) != "masculino" and strtolower($genero) != "femenino") {
        echo "El género $genero no es un género válido... Por favor ingrese alguna de estas opciones (Masculino, femenino)";
    }
    if ($edad < 0) {
        echo "La edad ingresada ($edad) no es válida... Por favor ingrese un número mayor a 0.";
    }
}
