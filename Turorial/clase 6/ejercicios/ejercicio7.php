<?php
/** 
 * Escribe un programa que tome una hora en formato "HH:MM" como entrada y muestre un mensaje diferente segun la franja horaria utilizando el ciclo match
 */
date_default_timezone_set("America/Bogota");
$hora = date("h:i");



$action = match(true){
    $hora >= "00:00" && $hora <= "12:00" => "Buenos Dias",
    $hora >= "12:00" && $hora <= "18:00" => "Buenas Tardes",
    $hora >= "18:00" && $hora <= "24:00" => "Buenas Noches",
    default => "Esa no existe"
};
echo "Son las $hora\n";
echo $action;
?>