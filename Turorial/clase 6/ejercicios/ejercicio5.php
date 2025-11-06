<?php
/**
 * Diseña un programa que tome una nota numerica del 0 al 100 como entrada y muestre un mensaje diferente segun su rango de la nota utilizando el ciclo match, Por ejemplo, si la nota esta entre y 100 mostrar: excelente.
 */

$nota = 80;

$action = match (true){
    $nota >= 90 && $nota <= 100 => "Excelente",
    $nota >= 80 && $nota <= 90 => "Bueno",
    $nota >= 70 && $nota <= 80 => "Aprobado",
    $nota >= 60 && $nota <= 70 => "Pasable",
    default => "Reprobado"
};

echo $action;
?>