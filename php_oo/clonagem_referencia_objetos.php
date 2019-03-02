<?php

class Pessoa{

    public $idade;
    public $nome;

    //Método mágico Inicia após ser chamado
    public function __clone(){

        echo 'Clonagem de objetos ';
    }

}

$pessoa = new Pessoa();
$pessoa->idade = '25';


/*Objeto que faz referencia a pessoa !instância
$pessoa2 = $pessoa;
$pessoa2->idade = '40';*/

//Clone
$pessoa2 = clone $pessoa;
$pessoa2->idade = 20.0;
$pessoa2->nome = 'Leandro';

echo $pessoa->idade;

echo var_dump($pessoa);
echo var_dump($pessoa2);
