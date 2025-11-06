<?php
/** 
 * Crea un programa que reciba una opcion del 1 al 5 como entrada y realice un acción diferente segun la opcion utilizando el ciclo match.
 *
*/

$numero = 5;

$action = match ($numero){
    1 => "Hola",
    2 => "Buenas Tardes",
    3 => "Hello",
    4 => "Good Morning",
    5 => "Good Night",
    default => "No hay ninguna"
};

echo $action;
?>