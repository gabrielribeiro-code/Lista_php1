<?php

function ordenarNomes($nomes){

$lista = explode(",", $nomes); //explode = separa o texto pelas virgulas e vira um vetor

for($i =0; $i < count($lista); $i++){
    $lista[$i] = trim($lista[$i]); //trim serve para tirar os espaços antes e depois de cada nome.

}

sort($lista);
//sort ordena a lista o nome é bem autoexplicativo como os bubble sort em C kk.

return $lista;

}

$nomes = "Gabriel, Davi, Carlos Butke, Caio Leite";

$resultado = ordenarNomes($nomes);

print_r($resultado) . "<br>"; //print_r serve para mostrar o array todo de uma vez.
echo "<br> <br>" . "Forma mais organizada: " . "<br>";

for($i =0; $i < count($resultado); $i++){
    echo "<br>" . $resultado[$i] . "<br>";
};


?>