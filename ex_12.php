<?php

function analisarProdutos($produtos, $buscaProduto){

$maiorPreco = 0;
$menorPreco = 99999;
$produtoCaro = "";
$produtoBarato = "";
$somaPrecos = 0;
$encontrado = false;

foreach ($produtos as $nome => $preco ){

if($preco > $maiorPreco) {
$maiorPreco = $preco;
$produtoCaro = $nome;
}

if($preco < $menorPreco){
    $menorPreco = $preco;
    $produtoBarato = $nome;
}

$somaPrecos = $somaPrecos + $preco;

if($nome == $buscaProduto){
    echo "Produto encontrado:  $nome - R$ $preco <br>";
    $encontrado = true;

}

}
$media = $somaPrecos / count($produtos);

echo "Produto mais caro: $produtoCaro vale: R$ $maiorPreco <br>";
echo "Produto mais barato: $produtoBarato vale: R$ $menorPreco <br>";
echo "Media dos preços: R$ $media  <br>" ;

if($encontrado == false){
echo "Produto não encontrado";

}
}

$produtos = [

"Arroz" => 25,
"Feijao" => 8,
"Leite" => 6, 
"Cafe" => 18
];

analisarProdutos($produtos, "Arroz");


?>