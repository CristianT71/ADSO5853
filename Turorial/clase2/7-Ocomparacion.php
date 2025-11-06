<?php

$valor1 = 2;
$valor2 = 3;

$respuesta = $valor1 == $valor2;   /** igualdad */
var_dump($respuesta);


$respuesta2 = $valor1 === $valor2;  /** identico? */
var_dump($respuesta2);

$respuesta3 = $valor1 >= $valor2;  /** menor o igual */
var_dump($respuesta3);

$respuesta4 = $valor1 != $valor2;  /** diferente? */
var_dump($respuesta4);
?>