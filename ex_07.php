<?php

function calcularDesconto($valorCompra){
    $desconto = 0;

    if($valorCompra > 1000){
        $desconto = 0.3;

        $valorDesconto = $valorCompra * $desconto;
        $valorFinal = $valorCompra - $valorDesconto;

        echo "<br>" . "O valor final é: " . $valorFinal;

    }

    if($valorCompra > 100){
        $desconto = 0.1;

        $valorDesconto = $valorCompra * $desconto;
        $valorFinal = $valorCompra - $valorDesconto;

        echo  "<br>" ."O valor final é: " . $valorFinal;

    }

    if($valorCompra > 500){
        $desconto = 0.2;

        $valorDesconto = $valorCompra * $desconto;
        $valorFinal = $valorCompra - $valorDesconto;

        echo "<br>" . "O valor final é: "  . $valorFinal;

    }
}

calcularDesconto(1200);

?>