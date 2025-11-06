<?php
/**Se desea diseñar un programa que escriba los nombres de los días de las semana en función del valor de una varible DÍA*/
echo "Ingrese un día de la semana\n";
$Día = "";

if($Día == "Lúnes"){
    echo "El día $Día, es el primer día de la semana";
}

elseif($Día == "Mártes"){
    echo "El día $Día, es el segundo día de la semana";
}

elseif($Día == "Miércoles"){
    echo "El día $Día, es el tercer día de la semana";
}

elseif($Día == "Juéves"){
    echo "El día $Día, es el cuarto día de la semana";
}

elseif($Día == "Vienes"){
    echo "El día $Día, es el quínto día de la semana";
}

elseif($Día == "Sábado"){
    echo "El día $Día, es el sexto día de la semana";
}

elseif($Día == "Domíngo"){
    echo "El día $Día, es el último día de la semana";
}

else{
    echo "El día ingresado no corresponde a un día de la semana, por favor, vuelve a intentar con un día correcto";
}
?>