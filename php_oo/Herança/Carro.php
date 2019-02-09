<?php

class Veiculo{

    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){

        echo 'Andou';
    }

    public function Parar(){
        echo 'Parou';

    }
}

class Carro extends Veiculo{

    public $placa;

    public function ligarLimpador(){

        echo 'limpando 321...';
    }

}

$carro = new Carro();

$carro->modelo = 'UNO';
$carro->cor = 'BRANCO';

echo '<br>';

$carro->Parar();

$carro->ligarLimpador();

$carro->placa = 'XFC-2416';

var_dump($carro);