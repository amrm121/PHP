<?php

include('Veiculo.php');

class Carro extends Veiculo{

    public $placa;

    public function ligarLimpador(){

        echo 'limpando 321...';
    }

}

$carro = new Carro();

$carro->setCor('Preto');
$carro->setModelo('Uno com escadas');
$carro->setAno(2018.1);
$carro->placa = 'PKI-5588';

    echo 'Cor do Carro: '.$carro->getCor().        '<br>';
    echo 'Modelo do Carro: '.$carro->getModelo().  '<br>';
    echo 'Ano do Carro: '.$carro->getAno().        '<br>';
    
//Chama metodo de Veiculo    
$carro->testeModelo();

