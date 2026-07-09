<?php

function calcularIMC(float $peso, float $altura): float
{
    if ($altura <= 0) {
        throw new InvalidArgumentException('Altura deve ser maior que zero.');
    }

    return round($peso / ($altura ** 2), 2);
}

function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenhaAleatoria(int $tamanho = 8): string
{
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*';
    $senha = '';
    $max = strlen($caracteres) - 1;

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[random_int(0, $max)];
    }

    return $senha;
}

function contarVogais(string $texto): int
{
    $texto = strtolower($texto);
    preg_match_all('/[aeiouáéíóúâêîôûãõ]/u', $texto, $matches);

    return count($matches[0]);
}

function inverterTexto(string $texto): string
{
    $caracteres = mb_str_split($texto);
    return implode('', array_reverse($caracteres));
}

function calcularIdade(string $dataNascimento): int
{
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();
    $diferenca = $hoje->diff($nascimento);

    return (int) $diferenca->y;
}

function converterMoeda(float $valor, float $taxaCambio): float
{
    return round($valor * $taxaCambio, 2);
}

function formatarTelefone(string $telefone): string
{
    $numeros = preg_replace('/\D/', '', $telefone);

    if (strlen($numeros) === 11) {
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $numeros);
    } elseif (strlen($numeros) === 10) {
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $numeros);
    }

    return $numeros;
}

function gerarSaudacaoConformeHorario(?int $hora = null): string
{
    if ($hora === null) {
        $hora = (int) date('H');
    }

    if ($hora >= 5 && $hora < 12) {
        return 'Bom dia!';
    } elseif ($hora >= 12 && $hora < 18) {
        return 'Boa tarde!';
    } else {
        return 'Boa noite!';
    }
}

function validarSenhaForte(string $senha): bool
{
    if (strlen($senha) < 8) {
        return false;
    }

    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temEspecial = preg_match('/[^A-Za-z0-9]/', $senha);

    return $temMaiuscula && $temMinuscula && $temNumero && $temEspecial;
}