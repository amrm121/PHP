<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta http-equiv="Content-Language" content="pt-br">
	<title>Variáveis PHP</title>
</head>

<body>

<?php
/*	
	//Passando valores por URL .php?a=5&b=8
	$n1 = $_GET["a"]; //Pega valor via URL
	$n2 = $_GET["b"];
	$s = $n1 + $n2;
	echo "A Soma entre $n1 e $n2 é: $s";

/* Operadores Aritméticos

Adição 	$r = $a + $b
Subtração $r = $a + $b
Multiplicação $r = $a * $b
Divisão = $r = $a / $b
Módulo = $r = $a % $b 
*/
	

//abs(<var>) Valor Absoluto 
	$n1 = $_GET["x"]; //Pega valor via URL
	$n2 = $_GET["y"];
	echo "<br/>Valor absoluto de X é: " .abs($n1); //Mostra apenas numéro Positivo
	
//pow(<var>, <var>) Potenciação	
	echo "<br/>Valor de $n1<sup>$n2</sup> e: " .pow($n1,$n2);
	
//sqrt() Raiz Quadrada
	echo "<br/>A Raiz Quadrada de $n1 é: " .sqrt($n1);

// round() Arredondamento
	echo "<br/>O valor arredondado de $n1 é: " .round($n1); // ceil = Arredonda para cima floor = Arredonta para baixo

//intval() Parte inteira do numero
	echo "<br/>O valor inteiro de $n1 é: " .intval($n1);

//number_format() Formatação
	//echo "<br/>O valor arredondado de $n1 em moeda é R$:" .number_format($n1);
?>


</body>

</html>
