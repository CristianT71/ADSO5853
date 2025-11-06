<?php
/** Diseñe un software que esccriba los nombres del día de las semana, en una funcion de una variable llamada dia
 * los dias de las semanana son 7 por lo que el rango de los valores de dia debe ser de 1 a 7 y dado caso que dia tome valor fuera del rango se debera un mensaje de alerta*/

$dia = 2;

switch ($dia){
    case 1:
        echo "El dia es lunes";
        break;
    case 2:
        echo "El dia es Martes";
        break;
    case 3:
        echo "El dia es Miercoles";
        break;
    case 4:
        echo "El dia es Jueves";
        break;
    case 5:
        echo "El dia es Viernes";
        break;
    case 6:
        echo "El dia es Sabado";
        break;
    case 7:
        echo "El dia es Domingo";
        break;
    default:
        echo "Alertaaaaaaaaaaaaaaaaa!!!";

}
?>