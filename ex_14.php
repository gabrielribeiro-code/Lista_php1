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

$quebraLinha = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';
 
echo "Vetor analisado: [" . implode(', ', $vetor) . "]" . $quebraLinha;
echo "Soma: " . $resultado['soma'] . $quebraLinha;
echo "Média: " . round($resultado['media'], 2) . $quebraLinha;
echo "Maior valor: " . $resultado['maior'] . $quebraLinha;
echo "Menor valor: " . $resultado['menor'] . $quebraLinha;
echo "Mediana: " . $resultado['mediana'] . $quebraLinha;
echo "Quantidade de pares: " . $resultado['pares'] . $quebraLinha;
echo "Quantidade de ímpares: " . $resultado['impares'] . $quebraLinha;
?>