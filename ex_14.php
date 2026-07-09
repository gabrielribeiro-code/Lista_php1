    <?php
function estatisticasNumericas(array $numeros): array
{
    if (empty($numeros)) {
        return [
            'soma' => 0,
            'media' => 0,
            'maior' => null,
            'menor' => null,
            'mediana' => null,
            'pares' => 0,
            'impares' => 0,
        ];
    }
 
    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    $maior = max($numeros);
    $menor = min($numeros);
    $ordenados = $numeros;
    sort($ordenados);
    $meio = intdiv($quantidade, 2);
 
    if ($quantidade % 2 === 0) {
        $mediana = ($ordenados[$meio - 1] + $ordenados[$meio]) / 2;
    } else {
        $mediana = $ordenados[$meio];
    }
 
    $pares = 0;
    $impares = 0;
 
    foreach ($numeros as $n) {
        if ($n % 2 === 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
 
    return [
        'soma' => $soma,
        'media' => $media,
        'maior' => $maior,
        'menor' => $menor,
        'mediana' => $mediana,
        'pares' => $pares,
        'impares' => $impares,
    ];
}
 
$vetor = [4, 8, 15, 16, 23, 42, 7, 3, 10];
 
$resultado = estatisticasNumericas($vetor);


 
echo "Vetor analisado: [" . implode(', ', $vetor) . "]" . "<br>";
echo "Soma: " . $resultado['soma'] . "<br>";
echo "Média: " . round($resultado['media'], 2) .  "<br>";
echo "Maior valor: " . $resultado['maior'] . "<br>";
echo "Menor valor: " . $resultado['menor'] . "<br>";
echo "Mediana: " . $resultado['mediana'] . "<br>";
echo "Quantidade de pares: " . $resultado['pares'] . "<br>";
echo "Quantidade de ímpares: " . $resultado['impares'] .  "<br>";
?>