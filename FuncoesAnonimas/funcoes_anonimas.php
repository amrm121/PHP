<?php 

require ('notas.php');
require ('alunos.php');

//Filtro de array

$notasFiltro = [];

foreach($notas as $nota):
    if($nota > 50){

        $notasFiltro[] = $nota;
    }
endforeach;

var_dump($notasFiltro);