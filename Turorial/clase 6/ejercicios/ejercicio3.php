<?php
/**
 * Escribe un programa que tome un numero del 1 al 7 como entrada y muestre el nombre del dia de la semana correspomndiente utilizando el ciclo match.
 */

$numero = 6;

$action = match ($numero) {
    1 => "Es el dia lunes",
    2 => "Es el dia Martes",
    3 => "Es el dia Miercoles",
    4 => "Es el dia Jueves",
    5 => "Es el dia Viernes",
    6 => "Es el dia Sabado",
    7 => "Es el dia Domingo",
    default => "No es un dia de la semana, pon un dia correcto y vuelve a intentarlo"
};

echo $action;
?>

