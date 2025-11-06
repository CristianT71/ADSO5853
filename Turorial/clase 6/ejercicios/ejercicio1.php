<?php
/**
 * Diseña un programa que tome una letra como entrada y muestre un mensaje segun la categoria a la que pertenezca la letra utilizando el ciclo match. Por ejemplo: si la letra es una vocal, mostrar Es una vocal.
 */
$letra = "a";

$action = match ($letra) {
    "a" => "Es una vocal",
    "e"=> "Es una vocal",
    "i"=> "Es un vocal",
    "o"=> "Es un vocal",
    "u"=> "Es un vocal",
    default => "$letra Es una consonante"
};

echo $action;
?>