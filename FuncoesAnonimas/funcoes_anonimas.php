<?php 

require ('notas.php');
require ('alunos.php');

//Filtro de idade
$idade = function($elem){
    return $elem['idade'] > 50;
};

//Filtro média
$rep = function($elem){

    return $elem < 50;
};


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

var_dump(filtroArray($notas, $rep));