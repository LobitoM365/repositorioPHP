<?php

$edad = readline("Por favor ingrese su edad: ");


if ($edad >= 18) {
    echo "¿Tienes licencia para conducir? ";
    $respuesta = readline();
    if ($respuesta == "si" || $respuesta == "SI") {
        echo "Puedes conducir";
    } else
    if ($respuesta == "no" || $respuesta == "NO") {
        echo "Debes obtener una licencia de conducir primero";
    } else {
        echo "$respuesta no es una respuesta válida, por faovor ingresa una respuesta válida";
    }
} else if ($edad < 18 && $edad >= 0) {
    echo "No puedes conducir";
} else {
    echo "Por favor ingrese una edad válida";
}
