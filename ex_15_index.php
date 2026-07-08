<?php
require_once __DIR__ . '/funcoes.php';

$nl = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

echo "===== BIBLIOTECA DE FUNÇÕES - DEMONSTRAÇÃO =====" . $nl . $nl;

// 1. Calcular IMC
$peso = 70;
$altura = 1.75;
$imc = calcularIMC($peso, $altura);
echo "1. Calcular IMC" . $nl;
echo "   Peso: {$peso}kg | Altura: {$altura}m => IMC: {$imc}" . $nl . $nl;

// 2. Validar e-mail
$emails = ['usuario@exemplo.com', 'email-invalido'];
echo "2. Validar e-mail" . $nl;
foreach ($emails as $email) {
    $valido = validarEmail($email) ? 'válido' : 'inválido';
    echo "   '{$email}' é {$valido}" . $nl;
}
echo $nl;

// 3. Gerar senha aleatória
$senhaGerada = gerarSenhaAleatoria(12);
echo "3. Gerar senha aleatória" . $nl;
echo "   Senha gerada (12 caracteres): {$senhaGerada}" . $nl . $nl;

// 4. Contar vogais
$texto = "Programação em PHP é muito útil";
$qtdVogais = contarVogais($texto);
echo "4. Contar vogais" . $nl;
echo "   Texto: \"{$texto}\"" . $nl;
echo "   Quantidade de vogais: {$qtdVogais}" . $nl . $nl;

// 5. Inverter texto
$textoOriginal = "Desenvolvedor PHP";
$textoInvertido = inverterTexto($textoOriginal);
echo "5. Inverter texto" . $nl;
echo "   Original: \"{$textoOriginal}\"" . $nl;
echo "   Invertido: \"{$textoInvertido}\"" . $nl . $nl;

// 6. Calcular idade
$dataNascimento = '2000-05-15';
$idade = calcularIdade($dataNascimento);
echo "6. Calcular idade" . $nl;
echo "   Data de nascimento: {$dataNascimento} => Idade: {$idade} anos" . $nl . $nl;

// 7. Converter moeda
$valorEmDolar = 100;
$taxaCambio = 5.20; // Exemplo: 1 USD = 5.20 BRL
$valorConvertido = converterMoeda($valorEmDolar, $taxaCambio);
echo "7. Converter moeda" . $nl;
echo "   US$ {$valorEmDolar} (taxa {$taxaCambio}) => R$ {$valorConvertido}" . $nl . $nl;

// 8. Formatar telefone
$telefones = ['11987654321', '1132654321'];
echo "8. Formatar telefone" . $nl;
foreach ($telefones as $tel) {
    echo "   {$tel} => " . formatarTelefone($tel) . $nl;
}
echo $nl;

// 9. Gerar saudação conforme o horário
echo "9. Gerar saudação conforme o horário" . $nl;
echo "   Às 08h: " . gerarSaudacaoConformeHorario(8) . $nl;
echo "   Às 14h: " . gerarSaudacaoConformeHorario(14) . $nl;
echo "   Às 21h: " . gerarSaudacaoConformeHorario(21) . $nl;
echo "   Agora: " . gerarSaudacaoConformeHorario() . $nl . $nl;

// 10. Validar senha forte
$senhas = ['12345678', 'SenhaForte123!', 'fraca'];
echo "10. Validar senha forte" . $nl;
foreach ($senhas as $senha) {
    $resultado = validarSenhaForte($senha) ? 'FORTE' : 'FRACA';
    echo "   '{$senha}' => {$resultado}" . $nl;
}
echo $nl;

echo "===== FIM DA DEMONSTRAÇÃO =====" . $nl;