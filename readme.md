# Atividade 05 PHP 

/////

# Exercicio 1:

No primeiro exercicio é solicitado que fizersemos uma calculadora de engenharia e com a ajuda do professor fizermos um sistema simples utilizando uma formula e
aprendendo a pesquisar na documentação do php como utilizar funções que já existem no PHP assim ajudando muito no decorrer das atividades e no funcionamento do Code.

# Exercicio 2: 

Na atividade dois utilizamos a seguinte função que tem na documentação do PHP: 

function inverterTexto(string $flamengo): string
{

return strrev($flamengo);
}

Essa função serve justamente para inveter as coisas dai criei a variavel flamengo recebendo 'mengo' e assim consegui inveter as palavras.

# Exercicio 3: 

No terceiro a logica usada foi muito simples pedia um sistema para mascarar CPF, dai utilizei funções do próprio PHP para fazer o meu sistema.

# Exercicio 4: 

No quarto exercício foi solicitado que fizessemos um gerador de senhas e utilizei como no exercicio anterior funções próprias do PHP para conseguir realizar meu trabalho, como: strlen e random_int que ajudaram muito no desenvolvimento e gerar uma senha aleatória.

# Exercicio 5: 

No quinto exercicio tivemos que criar uma função que seu principal objetivo é analisar texto e contar a quantidade de palavras, caracteres, vogais e consoantes e a lógica que eu utilizei foi usando algumas funções prontas e próprias do PHP para auxilar como: preg_match_all, strlen e str_word_count. O preg_match_all ele pega todas as letras que combinam com o que está entre []. O strlen conta caracteres, incluindo espaço, vírgula e !. E o str_word_count conta as palavras.

# Exercicio 6:

No sexto exercicio nos fomos chamados a fazer uma função de conversão de temperatura e o principal objetivo era trocar uma temperatura que estava em graus celsius para Fahrenheit ou Kelvin assim vice e versa. E a lógica utilizada por mim foi fazer vários if e utilizar as formulas prontas que tem na internet para esse calculo. Não tem nenhuma função só do php para fazer isso.

# Exercicio 7:

No sétimo exercicio foi solicitado que fosse feito um sistema para calcular descontos e do mesmo jeito que fiz o exercicio anterior utilizei de vários if's e a lógica de programação que aprendemos em C. Aqui:
function calcularDesconto($valorCompra){
    $desconto = 0;

    if($valorCompra > 1000){
        $desconto = 0.3;

        $valorDesconto = $valorCompra * $desconto;
        $valorFinal = $valorCompra - $valorDesconto;

        echo "<br>" . "O valor final é: " . $valorFinal;

    }
Bem parecido com o que nós faziamos em C ano passado.

# Exercicio 8: 

No oitavo exercicio foi solicitado quer fizessemos uma ordenação de lista, para isso o PHP tem funções próprias e utlizei algumas como: explode, trim, print_r e sort. 
explode = separa o texto pelas virgulas e vira um vetor.
trim = serve para tirar os espaços antes e depois de cada nome.
print_r = serve para mostrar o array todo de uma vez.
sort =  ordena a lista o nome é bem autoexplicativo como os bubble sort em C kk.

# Exercicio 9: 

No nono exercicio foi solicitado que fizessemos um verificador matemático que verificasse se um número era par ou impar, primo ou não e perfeito ou não. A lógica minha utilizada para fazer esse exercicio foi fazer vários if e else pois não tinha funções especificas do php para fazer o nosso trabalho, então tive que fazer com vários if e else. 

# Exercicio 10: 

No décimo exercício foi solicitado na aitvidade um sistema de notas a logica que eu utilizei para fazer este sistema foi utilizando funções já prontas do php que facilitou muito o trabalho para realizar a atividade.

As funções que eu utilizei foram essas:

$maiorNota = max($notas); //max = função do php para ver o número mais alto

$menorNota = min($notas); //min = função do php para ver o menor número.

$soma = array_sum($notas); //array_sum função do php para somar as notas.
$quantidade = count($notas); // count função do php para contar as notas.

Assim com estas funções foi muito mais fácil o desenvolvimento do trabalho.

# Exercicio 11:

Na decima primeira atividade foi solicitado que fizessemos um sistema que formatar relátorios e que mudificasse um texto para, totalemnte em letras maisculas, minisculas e desse a quantidade total de caracteres.
Novamente utilizei funções especificas do PHP que ajudaram muito a desenvolver o código e a atividade.

$maisculo = mb_strtoupper($texto, 'UTF-8'); // função do php que transforma tudo em maisculo
 
$minusculo = mb_strtolower($texto, 'UTF-8'); // função do php que transforma tudo em minisculo

$pMaiscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8'); // função do php que transforma a primeira letra sempre em maisculo, com conceito de case.

$conta = mb_strlen($texto, 'UTF-8'); // função que conta a quantidade de letras.

Assim com estas funções ficou muito mais simples de fazer do que com vários ifs e etc, e cada função faz uma coisa isso deixou também o código mais limpo e simples.

# Exercicio 12: 

No exercicio 12 foi solicitado que fizerssemos uma analise de produtos, um catologo de produtos, eu tive grande dificuldade tanto nessa e nas outras por que a gente fica com aquela ideia e C e as outras linguagens de programação de ter um lugar para o usuario digitar de enviar e ler e isso me confunde muito, mas enfim na 12 a lógica utilizada para fazer a atividade foi usar algumas funções do próprio php e alguns if's, uma logica de a esse recebe tal e sse recebe tal e é isso.

# Exercicio 13:

No exercicio 13 foi uma atividade bem mais complexa que as outras mais foi solicitado que fizerssemos uma criptografia de um texto utiizando a criptografia de César. Pesquisando o que era essa criptografia a gente ve que ela sempre desloca 3 posições então uitlizando funções do php e alguns ifs e else consegui realizar esta atividade. 

funções utilizadas como: 
strtolower = Transforma o texto em minisculo.
usamos também coisas como .= que siginfica lá no code $resultado = $resultado . $letra, fiz assim no código $resultado .= $letra;
strpos = Descobre a posição da letra no alfabeto.
E também teve essa conta que ajuda a não passar do fim do alfabeto = $novaPosicao =        ($posicao + $deslocamento) % 26; No descript é menos dessa equação e tem + 26 também para não ir para os números négativos e a conta der certinho para achar as posições = $novaPosicao = ($posicao - $deslocamento + 26) % 26;

A lógica basicamente é bem de ordenar vetores, ordenar posições que é coisas que nós vimos bastante em C, mas tive que pesquisar bastante essa atividade e tive grande dificuldade em faze-lá como em todas as outras.

# Exercicio 14:

No exercicio 14 foi pedido que fizerssemos uma estatistica númerica e que recebesse um vetor de numeros e retornasse soma, media, maior valor, menor, valor, mediana, quantidade de numeros pares e quantidade de números impares. Confesso que senti grande dificuldade em fazer as atividades e tive que pedir ajuda do meu irmão mas a lógica utilizada para fazer essa atividade foi a seguinte: Utilizando as funções proprias do PHP conseguimos fazer tranquilo a soma, media, maior valor e menor valor e mediana. Já para pares e impares um classico if, com a formula. 

Funções usadas:

array_sum = Faz a soma
count = Faz a conta da quantidade, para fazer a media depois.
max = Fala quem é o maior valor.
min = Fala quem é o menor valor.
sort = ordena para fazer a mediana depois
intdiv = Ajuda a fazer a mediana, pois descobre o centro do array, junto com o if que fizemos para fazer a mediana.

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

Toda essa parte do código serve primeiro para fazermos a pesquisa, acharmos a quantidade de numeros pares e impares e depois a genten tem a lista das coisas, a gente aponta que o 'maior' pertence a variavel maior assim sendo bem mais fácil, fazer o return, dai    colocamos vetor e alguns numeros e depois o echo mostrando os resultados. O mais dificil acredito seja entender a formula da mediana para aplicar aqui.

if ($quantidade % 2 === 0) {
        $mediana = ($ordenados[$meio - 1] + $ordenados[$meio]) / 2;
    } else {
        $mediana = $ordenados[$meio];
    }

    Mas funciona como se fosse na matematica mesmo nos vemos com a formula de par e impar por que  o meio vai se for par vai para parte de somar dois e dividir que assim descobre quando tem numeros pares no vetor ou matematica uma sequencia de numeros que a quantidade é par e quanto da impar é mais fácil é so achar o meio, atráves da ordenação.


# Exercicio 15:

    O exercicio 15 foi solicitado qeu fizerssemos uma biblioteca de funções foi uma atividade bem complexa e não consegui fazer sem ajuda de i.a e do meu irmão na verdade a maioria das atividades tive que pesquisar em algum lugar e também as funções no documento do php. Mas a logica era criar 10 funções uteis em php e depois um index demonstrando essas funções funcionando, basicamente o php sendo o backhend fazendo as funções funcionarem. A lógica utilizada dentro do código do da funções foi:

    Primeiro fazer cada função né as 10 que o professor solicitou e utilizando as funções do php e alguns if's e formulas fomos fazendo as funções igual as outras atividades. Mas na primeira função calcular imc, na primeira linha nos declaramos a função e exigimos dois numeros decimais de entrada e garatindo que o retorno tambem sera um float, temos um if para verificar se a altura informada é zero ou negativa. throw new InvalidArgumentException('Altura deve ser maior que zero.');: Essa função serve para interromper caso a altura seja inválida, evitando divisão por zero, isso faz paralelo um trabalho de teste de sistemas que eu fiz que deu um erro de milhoes de dolares na marinha dos EUA por causa de uma divisão por zero no banco de dados em 1997, então é importante ter essa função para isso não acontecer. E por ultimo o return roud com uma formula que  eleva a altura ao quadrado e divide o peso por esse resultado e arrendonda para duas casas decimais usando o round.

    Depois nas próximas 9 funções para nao ficar uma explicação tao extensa igual a primeira vou falar sobre mais as funções mais direntes que não foram utilizadas nas ultimas atividades.

    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false = Essa função ela serve para ver se o email for valido, ela irá retornar o proprio email, se for inválido ela retorna false, o operador !== false dai transforma o true ou false em definitivo.
     mb_str_split = Divide o texto em um arra, uma lista de letras. E mb significa que ele impede letras acentuadas sejam quebradas ou corrompidas.
     return implode('', array_reverse($caracteres)); = Inverte a ordem do array e depois junta todas as letras novamente com uma unica string usando o implode.
     $hoje->diff($nascimento); = Calcula a diferença exata de tempo entre a data de hoje e a de nascimento.
     preg_replace = remove tudo que nao for número no texto enviado.
     preg_match = usado para fazer verificações.

     Essas foram as partes de funções agora a parte do index, mesmo lógica utilizando várias funções if's, e etc...       
    Mas agora foi um pouco mas simples a codificação por que são validações estilo javascript e uma das unicas funções que utilizamos do PHP mesmo foi o foreach que serve para fazer pesquisas e é uma parte mais simples de validação e mostrar as coisas visualmente.