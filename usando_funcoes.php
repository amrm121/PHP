<?php

/*Utilização do number_format | Formatação da saida de números

    $x = '100000.00'; 

($x,casas_decimais,'marcação_decimal','marcação_milhar')

    $y = number_format($x,2,',','.').' Mil'; 

        echo $y;

/*Usando função foreach -> pecorre array

    Gera apenas os valores do array, ex: foreach ( $array as $valor ) { ação }
    
    Gera as chaves e seus valores, ex: foreach ( $array as $chave => $valor ) { ação }

/*Usanod array

    $array= array('Maça','Laranja','Ovos');

    foreach ($array as $key => $value){

        echo 'Indíce: '.$key.' Eu gosto de comer '.$array[$key].' no café da manhã. <br/>';
        
    }

*/