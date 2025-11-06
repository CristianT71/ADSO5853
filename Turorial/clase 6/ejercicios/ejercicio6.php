<?php
/*/ Desarrolla un programa que tome una cadena de texto como entrada y muestre un mensaje según la longitud de 
la cadena utilizando el ciclo "match". Por ejemplo, si la longitud es mayor a 10 caracteres, mostrar "La cadena
es larga. /*/
$cadena = "hi"; 

$cantidad = strlen ($cadena); 

$action = match (true) {
    $cantidad >= 10 => "La cadena es larga, tiene $cantidad de longitud",
    $cantidad >= 5 && $cantidad <= 10 => "La cadena es mediana, tiene $cantidad de longitud",
    default => "La cadena es corta, tiene $cantidad de longitud",
}; 

echo $action; 



?>