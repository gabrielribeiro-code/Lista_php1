<?php
require_once __DIR__ . '/funcoes.php';

echo "===== BIBLIOTECA DE FUNÇÕES - DEMONSTRAÇÃO =====" . "<br>" . "<br>";

$peso = 70;
$altura = 1.75;
$imc = calcularIMC($peso, $altura);
echo "1. Calcular IMC" . "<br>"   ;
echo "   Peso: {$peso}kg | Altura: {$altura}m => IMC: {$imc}" . "<br>" . "<br>";

$emails = ['usuario@exemplo.com', 'email-invalido'];
echo "2. Validar e-mail" . "<br>";
foreach ($emails as $email) {
    $valido = validarEmail($email) ? 'válido' : 'inválido';
    echo "   '{$email}' é {$valido}" . "<br>";
}
echo "<br>";

$senhaGerada = gerarSenhaAleatoria(12);
echo "3. Gerar senha aleatória" . "<br>";
echo "   Senha gerada (12 caracteres): {$senhaGerada}" . "<br>" . "<br>";


$texto = "Programação em PHP é muito daora";
$qtdVogais = contarVogais($texto);
echo "4. Contar vogais" . "<br>";
echo "   Texto: \"{$texto}\"" . "<br>";
echo "   Quantidade de vogais: {$qtdVogais}" . "<br>" . "<br>";


$textoOriginal = "Desenvolvedor PHP";
$textoInvertido = inverterTexto($textoOriginal);
echo "5. Inverter texto" . "<br>";
echo "   Original: \"{$textoOriginal}\"" . "<br>";
echo "   Invertido: \"{$textoInvertido}\"" . "<br>" . "<br>";


$dataNascimento = '2000-05-15';
$idade = calcularIdade($dataNascimento);
echo "6. Calcular idade" . "<br>";
echo "   Data de nascimento: {$dataNascimento} => Idade: {$idade} anos" . "<br>" . "<br>";

$valorEmDolar = 100;
$taxaCambio = 5.20; 
$valorConvertido = converterMoeda($valorEmDolar, $taxaCambio);
echo "7. Converter moeda" . "<br>";
echo "   US$ {$valorEmDolar} (taxa {$taxaCambio}) => R$ {$valorConvertido}" . "<br>" . "<br>";

$telefones = ['11987654321', '1132654321'];
echo "8. Formatar telefone" . "<br>";
foreach ($telefones as $tel) {
    echo "   {$tel} => " . formatarTelefone($tel) . "<br>";
}
echo "<br>";


echo "9. Gerar saudação conforme o horário" . "<br>";
echo "   Às 08h: " . gerarSaudacaoConformeHorario(8) . "<br>";
echo "   Às 14h: " . gerarSaudacaoConformeHorario(14) . "<br>";
echo "   Às 21h: " . gerarSaudacaoConformeHorario(21) . "<br>";
echo "   Agora: " . gerarSaudacaoConformeHorario() . "<br>" . "<br>";


$senhas = ['12345678', 'SenhaForte123!', 'fraca'];
echo "10. Validar senha forte" . "<br>";
foreach ($senhas as $senha) {
    $resultado = validarSenhaForte($senha) ? 'FORTE' : 'FRACA';
    echo "   '{$senha}' => {$resultado}" . "<br>";
}
echo "<br>";

echo "===== FIM DA DEMONSTRAÇÃO =====" . "<br>";