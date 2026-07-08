<?php

function calcularMedia($notas){

$maiorNota = max($notas); //max = função do php para ver o número mais alto

$menorNota = min($notas); //min = função do php para ver o menor número.

$soma = array_sum($notas); //array_sum função do php para somar as notas.
$quantidade = count($notas); // count função do php para contar as notas.

$mediaNota = $soma / $quantidade;

if($mediaNota >= 7){
    $situacao = "Aprovado"; 
}elseif($mediaNota >= 5 && $mediaNota <= 7 ){
    $situacao = "Recuperação";
}else{
    $sitaucao = "Reprovado";
}

return [

'maiorNota' => $maiorNota,
'menorNota' => $menorNota,
'mediaNota' => $mediaNota,
'situacao' =>  $situacao



];
}
    

$notasAluno = [4, 3, 10];
$resultado = calcularMedia($notasAluno);

echo "Maior Nota: " . $resultado ['maiorNota'] . "<br>";
echo "Menor Nota: " .  $resultado ['menorNota'] . "<br>";
echo "Média da Nota: " . $resultado ['mediaNota'] . "<br>";
echo "Situação final: " . $resultado ['situacao'] . "<br>";
?>