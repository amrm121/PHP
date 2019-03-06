<?php 

require ('notas.php');
require ('alunos.php');

//Função anonima do PHP
$res = array_filter($notas, function($nota){

    return $nota > 50;
});

var_dump($res);