<?php


/*Uma variável será considerada falsa (false) quando ela:

    for o próprio booleano FALSE;
    for 0 (zero);
    for 0.0 (zero ponto zero);
    for um valor vazio ou “0”;
    for um array sem elementos;
    for um objeto sem elementos membros;
    for NULL (incluindo variáveis não definidas);
    for o objeto SimpleXML criado de tags vazias


Inteiro, Octal e Hexadecimal
    $variavel = +1234; // número positivo
    $variavel = -1234; // número negativo
    $variavel =  0123; // número octal (83 em decimal) OCTAL é necessário começar com 0
    $variavel =  0x1A; // número hexadecimal (26 em decimal)

Pseudo-tipo mixed
    Iindica que um parâmetro pode aceitar vários (mas não necessariamente todos) os tipos de dados.

Pseudo-tipo number
    Indica que um parâmetro pode ser tanto um integer quanto float.

Pseudo-tipo callback
    São funções que podem ser definidas por usuários e passadas como parâmetros para outras funções do PHP.

gettype: descubra o tipo
    Para saber qual o tipo de uma variável / echo gettype ($variavel)
*/

/*Modificando os tipos de dados em PHP

Uma frase número e uma frase
    $variavel = '2254: Olá!';

O valor é convertido para inteiro
    echo (int)$variavel; // Exibe: 2254

Conversão de dados

    (int), (integer) – converte para inteiro
    (bool), (boolean) – converte para booleano
    (float), (double), (real) – converte para número de ponto flutuante
    (string) – converte para string
    (binary) – converte para string binária (PHP 6)
    (array) – converte para array
    (object) – converte para objeto
    (unset) – converte para NULL (PHP 5)

*/

/*Conversão de INT
$x = '10 Leandro é:';
    echo (int)$x; //retorna apenas 10

$y = 'Leandro é 10';
    echo (int)$y; //retorna 0 | //! O 10 tem que vim na frente?

//! Ao executar x e y, retorna 100, estar havendo uma concatenação do valor de x,y. Porque? 
*/
