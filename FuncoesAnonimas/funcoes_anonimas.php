<?php 

require ('notas.php');
require ('alunos.php');

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

//Função anônima full
var_dump(filtroArray($notas, function($elem){

    return $elem > 50;

}));