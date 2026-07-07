<?php

// (x² + y²) / (x + y)

function calcularFormula($x, $y)
{

    if(($x + $y) == 0 ){
        return "Não foi possivel realizar a divisão por zero.";
    }

    $resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);

    return $resultado;
}

$x_usuario = 10;
$y_usuario = 5;

echo "Valor de X: $x_usuario <br>";
echo "Valor de X: $y_usuario <br><br>";

echo calcularFormula($x_usuario,$y_usuario);
echo "test";