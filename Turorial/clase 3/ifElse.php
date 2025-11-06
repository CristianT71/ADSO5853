<?php

//condition = true

$edad = 17;
if($edad > 18){
    //codigo a ejecutar
    echo "Puede Ingresar";
} 

elseif ($edad >= 18 && $edad <= 24){
    echo "Muestre la cedula";
}

elseif ($edad >= 25 && $edad <= 50) {
    echo "Siga señor";
}

else{
    echo "No puede ingresar";
}
?>