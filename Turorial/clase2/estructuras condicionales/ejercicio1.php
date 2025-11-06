<?php
/**Ejercicio:
 
En una fábrica de computadores se plantea ofrecer a los clientes un descuento que dependerá del número de computadores que compre.
Si los computadores son menos de 5, se le dará un descuento del 10%;
si el número de computadores comprados es mayor o igual a 5 pero menos de 10 se le otorga un 20% de descuento;
y si son más de 10 se les da un 40% de descuento.
El precio de cada computador es de $700 USD. 

?>*/

define("PRECIO", 700); //aqui delare la constante para el precio porque este no cambia

$cantidad = 6;   // deje sin valor porque se le asignara el que se desee cuando quiera

$descuento1 = 10; // aqui declaramos una variable con el 10 que es el descuento 1

$descuento2 = 20; // aqui declaramos una variable con el 20 que es el descuento 2

$descuento3 = 40; // aqui declaramos una variable con el 40 que es el descuento 3



//Primero lo haremos para el 10% que se le aplica a los que compra menos de 5 computadores

if($cantidad <5){  // aqui decimos si la cantidad es menor a 5

    $descuentoNo1 = (PRECIO * $cantidad) * ($descuento1 / 100); // Calcucamos el descuento del 10%

    $total = PRECIO * $cantidad - $descuentoNo1; // Calculamos el precio por la cantidad menos el descuento que realizamos
        echo "El total de su compra con el 10% es: $total";  // aqui imprimimos el total con descuento
} 


// Segundo lo haremos para el 20% que se aplica a los que compran mas de 5 y menos de 10 computadores

if($cantidad >= 5 && $cantidad < 10){ // aqui decimos si la cantidad es mayor o igual a 5 tambien usamos el and y con los dos && o el and solo donde le decimos debe ser menor o igual a 10 

    $descuentoNo2 = (PRECIO * $cantidad) * ($descuento2 / 100); // Calculamos el descuento de 20%

    $total = PRECIO * $cantidad - $descuentoNo2; // Calculamos el precio por la cantidad menos el descuento que realizamos 
        echo "El total de su compra con el 20% es: $total";  // aqui imprimimos el total con descuento
}



//Y por ultimo lo haremos para el 40% que se le aplica a los que compran mas de 10 computadores

if($cantidad >= 10){
    $descuentoNo3 = (PRECIO *$cantidad) * ($descuento3 / 100); // Calculamos el descuento de 40%
    $total = PRECIO * $cantidad - $descuentoNo3; // Calculamos el precio por la cantidad menos el descuento que realizamos
        echo "El total de su compra con el 40% es: $total";

}
?>