<?php
// Cómo declarar una variable correctamente
$variable;       // válido
$Variable;       // válido (PHP distingue mayúsculas)
$_variable;      // válido (puede empezar con guión bajo)

// Cómo NO declarar una variable
// $1variable;    //  No puede empezar con número
// $-variable;    //  No puede empezar con símbolo como guión
// $@variable;    //  No puede contener caracteres especiales
// variable;      //  Falta el signo $
// $;             //  No tiene nombre

// Ejemplo correcto con asignación
$nombre = "Cristián";
echo "Hola, $nombre";
echo "<br>";
?>