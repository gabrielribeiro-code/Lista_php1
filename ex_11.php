<?php

function formatarTexto($texto){

$maisculo = mb_strtoupper($texto, 'UTF-8'); // função do php que transforma tudo em maisculo
 
$minusculo = mb_strtolower($texto, 'UTF-8'); // função do php que transforma tudo em minisculo

$pMaiscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8'); // função do php que transforma a primeira letra sempre em maisculo, com conceito de case.

$conta = mb_strlen($texto, 'UTF-8'); // função que conta a quantidade de letras.



return[

'maisculo' => $maisculo,
'minusculo' => $minusculo,
'pMaiscula' => $pMaiscula,
'conta' => $conta

];

}

$texto = "O flamengo é seleção!"; 
$resultado = formatarTexto($texto);

echo "Maiscula: " . $resultado ['maisculo'] . "<br>";
echo "Miniscula: " . $resultado ['minusculo'] . "<br>";
echo "pMaiscula: " . $resultado ['pMaiscula'] . "<br>";
echo "Conta: " . $resultado ['conta'] . "<br>";
?>