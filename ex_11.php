<?php

function formatarTexto($texto){

$maisculo = mb_strtoupper($texto, 'UTF-8');

$minusculo = mb_strtolower($texto, 'UTF-8');

$pMaiscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8');

$conta = mb_strlen($texto, 'UTF-8');



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