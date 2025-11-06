<?php
/**
 * Crea un programa que reciba un numero del 1 al 12 como entrada y muestre el nombre del mes correspondiente utilizando el ciclo match.
 */

$numero = 1;

$action = match ($numero) {
    1 => "El numero $numero pertecene al mes enero",
    2 => "El numero $numero pertecene al mes Febrero",                
    3 => "El numero $numero pertecene al mes Marzo",        
    4 => "El numero $numero pertecene al mes Abril",        
    5 => "El numero $numero pertecene al mes Mayo",        
    6 => "El numero $numero pertecene al mes Junio",        
    7 => "El numero $numero pertecene al mes Julio",        
    8 => "El numero $numero pertecene al mes Agosto",        
    9 => "El numero $numero pertecene al mes Septiembre",        
    10 => "El numero $numero pertecene al mes Octubre",        
    11 => "El numero $numero pertecene al mes Noviembre",        
    12 => "El numero $numero pertecene al mes Diciembre",        
    default => "El numero $numero no pertenece a un mes del año, por favor, ingresa un numero del 1 al 12 y vuelve a intentarlo"
};

echo $action;
?>