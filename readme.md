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


