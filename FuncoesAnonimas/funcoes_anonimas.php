<?php 

require ('notas.php');
require ('alunos.php');

//Cria filtro para notas
$filtro = function($nota){
    return $nota < 50;
};

//Segundo parâmetro chama filtro
$res = array_filter($notas, $filtro);

var_dump($res);