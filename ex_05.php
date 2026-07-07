<?php

function analisarTexto($texto) {

$palavras = str_word_count($texto);
$caracteres = strlen($texto);

$vogais = preg_match_all('/[aeiouAEIOU]/', $texto);

$consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

return [
"palavras" => $palavras,
"caracteres" => $caracteres,
"vogais" => $vogais,
"consoantes" => $consoantes
];

//preg_match_all ele pega todas as letras que combinam com o que está entre []
// aeiou são as vogais e em baixo são as consoantes
// strlen conta caracteres, incluindo espaço, vírgula e !
// str_word_count conta as palavras
// A parte do return serve para retornar a palavra = a quantidade por exemplo palavras = 4

 
}

$texto = "Fim do Hexa";

$resultado = analisarTexto($texto);

echo "O texto é: " .  $texto ."<br>";

echo "<br>" . "Palavras: " . $resultado["palavras"] ."<br>";
echo "Caracteres: " . $resultado["caracteres"] ."<br>";
echo "Vogais: " . $resultado["vogais"] ."<br>";
echo "Consoantes: " . $resultado["consoantes"] ."<br>";
?>