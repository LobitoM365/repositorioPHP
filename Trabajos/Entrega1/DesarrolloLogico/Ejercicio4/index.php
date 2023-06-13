<?php

$palabra = readline("Ingrese una palabra:  ");
echo "\n"; 


$palabraAlrevez = "";
for($u = strlen($palabra) - 1 ; $u >= 0; $u--){
    $palabraAlrevez = $palabraAlrevez . $palabra[$u];
}

if(str_replace(" ","", $palabra) == str_replace(" ","",$palabraAlrevez)){
    echo "La palabra $palabra es palindroma porque alrevez = $palabraAlrevez";
}else{
    echo "La palabra $palabra no es palindroma porque alrevez = $palabraAlrevez";
}

