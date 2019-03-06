<?php 

require ('notas.php');
require ('alunos.php');

//Filtro de idade
function maior($elem){
    return $elem['idade'] > 50;
}

//Filtro média
function reprovado($elem){

    return $elem < 50;
}


/*Criando própria função callback

Recebe array de notas ou alunos
Recebe como segundo parâmetro uma função, como lógica especifica da função


*/
function filtroArray(Array $array, $nomeFuncao){

    $filtro = [];

    foreach($array as $elem):
        if($nomeFuncao($elem)){

            $filtro[] = $elem;
        }
    endforeach;

    return $filtro;
}

var_dump(filtroArray($alunos, 'maior'));