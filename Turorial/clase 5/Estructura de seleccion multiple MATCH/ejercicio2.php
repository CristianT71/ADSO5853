<?php
/**Crea un programa que reciba el nombre de un color como entrada y muestre un mensaje diferente segun el color ulitizando el ciclo match . POr ejemplo si el color  es rojo mostrar el color es calido */



$color = "Rojo";

$action = match ($color) {
    "Rojo" => "El color es calido",
    "Verde" => "Es un color frio",
    "Morado" => "Es un color intermedio frio",
    default => "No pertenece a la lista de colores"
};

echo $action; 
?>