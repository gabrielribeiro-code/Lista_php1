<?php

function gerarSenha($tamanho = 10) {


$maisculas = 'ABCDEFGHIJKLMNOPUQXYZ';
$minusculas = 'abcdefghiojklmnopuqxyz';
$numeros = '0123456789';
$especiais = '!@#$%^&*()-_=+[]{}|;:,.<>?';

$todosCaracter = $maisculas . $minusculas . $numeros . $especiais;
$senha = '';



    $ultimoIndice = strlen($todosCaracter) - 1; // aqui tiramos um pq o php começa a contar do 0

    for ($i = 0; $i < $tamanho; $i++) {  //vai repetir o sorteio até a senha que eu pedir.

     
        $posicaoSorteada = random_int(0, $ultimoIndice); // aqui escolhe um caracter aleatorio em alguma posição
        
        
        $senha .= $todosCaracter[$posicaoSorteada];  // Pega a letra que está nessa posição e joga na senha
    }

    return $senha;
}

echo  "SENHA ALEATORIA:  " .  gerarSenha(16);

?>