<?php
$nota = readline("Por favor ingrese su nota (0 al 100):  ");
$nota = (int)$nota;
$resultado = match (true) {
    $nota > 100 => "La nota ingresada ($nota) no es válida",
    $nota >= 90 => "La nota es excelente",
    $nota >= 80 => "La nota es buena",
    $nota >= 60 => "La nota es regular",
    $nota >= 50 => "La nota es mala",
    $nota >= 10 => "La nota es muy mala",
    default => "La nota ingresada ($nota) no es válida"
};

echo $resultado;
