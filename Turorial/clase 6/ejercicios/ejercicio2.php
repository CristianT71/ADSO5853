<?php
/**
 * Desarrolla un programa que tome un mes como entrada al formato y muestre un mensaje diferente segun el mes utilizando el ciclo match.
 */

$mes = "Enero";

$action = match ($mes) {
    "Enero" => "Es el mes 1",
    "Febrero"=> "Es el mes 2",
    "Marzo"=> "Es el mes 3",
    "Abril"=> "Es el mes 4",
    "Mayo"=> "Es el mes 5",
    "Junio"=> "Es el mes 6",
    "Julio"=> "Es el mes 7",
    "Agosto"=> "Es el mes 8",
    "Septiembre"=> "Es el mes 9",
    "Octubre"=> "Es el mes 10",
    "Noviembre"=> "Es el mes 11",
    "Diciembre"=> "Es el mes 12",
    default => "El mes ingresado $mes no existe o no es un mes, vuelve a intentar con un mes correcto"
};

echo $action;
?>