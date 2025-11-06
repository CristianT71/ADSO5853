<?php
/**4- Ejercicio de anidación de sentencias if:
Escribe un programa que solicite al usuario que ingrese su edad. Si la edad es mayor o igual a 18 años, el programa debe preguntar si tiene licencia de conducir. Si la respuesta es "sí", el programa debe imprimir "Puedes conducir". Si la respuesta es "no", el programa debe imprimir "Debes obtener una licencia de conducir primero". Si la edad es menor de 18 años, el programa debe imprimir "No puedes conducir".
 */

$edad = 19;
$respuesta = "si";

if($edad >= 18){
    echo "Sistema: ¿Tienes licencia de conducir?\n";
    
    if($respuesta == "si"){
        echo "Usuario: $respuesta\n";
        echo "Sistema: Puedes conducir";
    }
    elseif($respuesta == "no"){
        echo "Usuario: $respuesta\n";
        echo "Sistema: Debes obtener una licencia de conducir primero";
    }
} else {
    echo "Usuario: $edad\n";
    echo "Sistema: No puedes conducir";
}
?>