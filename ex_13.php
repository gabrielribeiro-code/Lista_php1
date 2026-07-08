<?php

function criptMensagem($texto, $deslocamento = 3){
$alfabeto = "abcdefghijklmnopqrstuvwxyz";
$resultado = "";

$texto = strtolower($texto);

for($i =0; $i < strlen($texto); $i++){
$letra = $texto[$i];

if(strpos($alfabeto, $letra) === false) {
    $resultado .= $letra; 
} else {
    $posicao = strpos($alfabeto , $letra);

    $novaPosicao = ($posicao + $deslocamento) % 26;

    $resultado .= $alfabeto[$novaPosicao];

        }       
    }
    return $resultado;
}

function descriptMensagem($texto, $deslocamento = 3){
$alfabeto = "abcdefghijklmnopqrstuvwxyz";
$resultado = "";

for($i = 0; $i < strlen($texto); $i++) {
    $letra = $texto[$i];

    if(strpos($alfabeto, $letra) === false) {
    $resultado .= $letra;
    
    } else {
        $posicao = strpos($alfabeto, $letra);

        $novaPosicao = ($posicao - $deslocamento + 26) % 26;

        $resultado .= $alfabeto[$novaPosicao];
        }
    }
return $resultado;
}

$mensagem = "mengo ganhando de dois a zero do time da suica";
$criptrografa = criptMensagem($mensagem);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $criptrografa . "<br>";
echo "Mensagem descriptografada: " . descriptMensagem($criptrografa);
?>