<?php

//Utilização do number_format | Formatação da saida de números

$x = '100000.00'; 

//($x,casas_decimais,'marcação_decimal','marcação_milhar')

$y = number_format($x,2,',','.').' Mil'; 

    echo $y;
