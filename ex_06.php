<?php

function converterTemperatura($temperatura, $origem, $destino){

if($origem == "C" && $destino == "F"){
    return($temperatura * 9 / 5) + 32;
}

if($origem == "C" && $destino == "K"){
    return $temperatura + 273;
}

if($origem == "F" && $destino == "C"){
    return ($temperatura -32) * 5 / 9;
}

if($origem == "K" && $destino == "C"){
    return $temperatura - 273;
}
}
$temperatura = 25;
echo "Temperatura Inicial: " . $temperatura . "<br>";
echo "<br>" . "Temperatura Convertida: " ."<br>";
echo converterTemperatura($temperatura, "C", "F");


//Como nao existe uma função fixa do php como o strlen para fazer essa conversão fiz por if's.

?>