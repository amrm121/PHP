<?php //Day01

class Pessoa{

    public $nome;
    public $idade;

    public function Falar(){

        echo $this->nome.' possui '.$this->idade.' de idade';

    }
}

$leo = new Pessoa();
$leo->nome = 'Leandro Alves';
$leo->idade = (float)20;
$leo->Falar();

