<?php

function analisarNumero($numero){

    if($numero < 1){

        return "O número deve ser inteiro";
}

$par = ($numero % 2 === 0); //AQUI VERIFICA PAR
 
$ePrimo = true; // Começamos acreditando que o número é primo

if($numero <= 1){

    $ePrimo = false;


}else{

for($i = 2; $i <= sqrt($numero); $i++){ //AQUI VERIFICA PRIMOS
    if ($numero % $i === 0){
         $ePrimo = false;
            break;
        }

    }

}

$somaDivisores =0; // AQUI É VERIFICAÇÂO DO NUMERO PERFEITO, número perfeito é quando a soma dos valores divisiveis da o valor, por ex: 6, é divisivel por (1,2,3) e a soma deles da 6.
for($i = 1; $i <= $numero /2; $i++){
    if($numero % $i ===0){
        $somaDivisores+= $i;
    }

}

$ePerfeito = ($somaDivisores === $numero);

return [

    'numero' => $numero,
    'par' => $par,
    'impar' => !$par,
    'primo' => $ePrimo,
    'perfeito' => $ePerfeito
];


}


$resultado = analisarNumero(6);

echo "O numero analisado foi: " . $resultado['numero'] . "<br>";

if($resultado = ['par']){
    echo "Este número é par! <br>";
    
}else{
    echo "Este número é impar! <br>";
}

if($resultado = ['primo']){
    echo "Este número é primo! <br>";

}else{
    echo "Este núemro não é primo! <br>";
}

if($resultado = ['perfeito']){
    echo "Este número é perfeito! <br>";

}else{
    echo "Este núemro não é perfeito! <br>";
}

?>

