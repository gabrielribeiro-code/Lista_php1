<?php
/**
 * Arquivo com funções reutilizáveis para serem usadas em diversos sistemas.
 */

/**
 * 1. Calcula o Índice de Massa Corporal (IMC).
 *
 * @param float $peso   Peso em quilogramas.
 * @param float $altura Altura em metros.
 * @return float IMC calculado.
 */
function calcularIMC(float $peso, float $altura): float
{
    if ($altura <= 0) {
        throw new InvalidArgumentException('Altura deve ser maior que zero.');
    }

    return round($peso / ($altura ** 2), 2);
}

/**
 * 2. Valida se uma string é um e-mail em formato válido.
 *
 * @param string $email
 * @return bool
 */
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * 3. Gera uma senha aleatória com o tamanho especificado.
 *
 * @param int $tamanho Tamanho da senha (padrão 8).
 * @return string Senha gerada.
 */
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

/**
 * 4. Conta a quantidade de vogais em um texto.
 *
 * @param string $texto
 * @return int Quantidade de vogais encontradas.
 */
function contarVogais(string $texto): int
{
    $texto = strtolower($texto);
    preg_match_all('/[aeiouáéíóúâêîôûãõ]/u', $texto, $matches);

    return count($matches[0]);
}

/**
 * 5. Inverte o conteúdo de um texto.
 *
 * @param string $texto
 * @return string Texto invertido.
 */
function inverterTexto(string $texto): string
{
    // strrev não lida bem com multibyte/acentos, então tratamos manualmente
    $caracteres = mb_str_split($texto);
    return implode('', array_reverse($caracteres));
}

/**
 * 6. Calcula a idade a partir da data de nascimento.
 *
 * @param string $dataNascimento Data no formato 'Y-m-d'.
 * @return int Idade em anos completos.
 */
function calcularIdade(string $dataNascimento): int
{
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();
    $diferenca = $hoje->diff($nascimento);

    return (int) $diferenca->y;
}

/**
 * 7. Converte um valor de uma moeda para outra usando uma taxa de câmbio.
 *
 * @param float $valor Valor a ser convertido.
 * @param float $taxaCambio Taxa de câmbio (ex: 1 USD = 5.20 BRL -> taxa = 5.20).
 * @return float Valor convertido.
 */
function converterMoeda(float $valor, float $taxaCambio): float
{
    return round($valor * $taxaCambio, 2);
}

/**
 * 8. Formata um número de telefone para o padrão (XX) XXXXX-XXXX ou (XX) XXXX-XXXX.
 *
 * @param string $telefone Telefone contendo apenas números (ou não).
 * @return string Telefone formatado.
 */
function formatarTelefone(string $telefone): string
{
    // Remove tudo que não for dígito
    $numeros = preg_replace('/\D/', '', $telefone);

    if (strlen($numeros) === 11) {
        // Celular: (XX) XXXXX-XXXX
        return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $numeros);
    } elseif (strlen($numeros) === 10) {
        // Fixo: (XX) XXXX-XXXX
        return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $numeros);
    }

    // Formato não reconhecido, retorna apenas os números limpos
    return $numeros;
}

/**
 * 9. Gera uma saudação de acordo com o horário atual (ou informado).
 *
 * @param int|null $hora Hora (0-23). Se null, usa a hora atual do sistema.
 * @return string Saudação apropriada.
 */
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

/**
 * 10. Valida se uma senha é considerada forte.
 * Critérios: mínimo 8 caracteres, ao menos 1 letra maiúscula,
 * 1 letra minúscula, 1 número e 1 caractere especial.
 *
 * @param string $senha
 * @return bool
 */
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