<?php 

require ('notas.php');
require ('alunos.php');

//Cria filtro para notas
function filtro($nota){
    return $nota > 50;
};

//Segundo parâmetro chama função filtro como string
$res = array_filter($notas, 'filtro');

var_dump($res);