<?php

function inverterTexto(string $flamengo): string
{

return strrev($flamengo);
}

function contagem(string $contagem) : int

{

return strlen($contagem);

}

$flamengo = "mengo";
$cont= 'mengo';

echo "Texto invertido: " . inverterTexto($flamengo);
echo "<br> Quantidade de caracteres: " . contagem($flamengo);
?>