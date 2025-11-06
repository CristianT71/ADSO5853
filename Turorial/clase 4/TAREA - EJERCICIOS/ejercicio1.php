<?php
/**Estructura condicional anidada
Ejercicio:
Pida a un usuario la edad y genero, para que el sistema le indique si ya está en la edad para pensionarse.
Tenga en cuenta que un Hombre se puede pensionar a los 60 años o más, mientras que las mujeres lo pueden hacer después de los 54 años. */
echo "¿Puedes pensionarte?\n";
$edadhombre = 70;
$edadmujer = 60;
$genero = "Mujer";


if ($genero == "Hombre") {
    if ($edadhombre >= 64) {
        echo "Eres $genero y tienes la $edadhombre, puedes pensionarte";
    } else {
        echo "Eres $genero, pero aún no tienes la edad para pensionarte";
    }
} 

if ($genero == "Mujer") {
   if ($edadmujer >= 54){
        echo "Puedes pensionarte porque eres $genero y tienes $edadmujer";
    } else {
        echo "Eres $genero, pero aún no tienes la edad para pensionarte";
    }
}

else {
    echo "Es necesario que completes todos los campos para poder validar si puedes o no pensionarte";
}
?>