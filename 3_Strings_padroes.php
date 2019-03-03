<?php
/* NOWDOC
    $str= <<<'A'
    Usando nowdoc.
    A;


/* HEREDOC
    $str= <<<"A"
    Usando nowdoc.
    A;


*/

$e = 'leandro@gmail.com';

//Retorna valor de $e a partir do parâmetro inicial
print strstr($e, 'd');