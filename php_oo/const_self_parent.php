<?php

class Pessoa{
    
    const nome = 'Leandro';

    public function exibirNome(){
        
             //referencia da constante
        echo self::nome;

    }
   
}

class Alves extends Pessoa{
    
    const nome = 'Alves';

    public function exibirNome(){
        
        /*referencia da constante dentro do escopo da class
        echo self::nome;
        */

        //referencia da constante SuperClass
        echo parent::nome;
    }
   
}

$Pessoa = new Pessoa();
$Pessoa->exibirNome();

$Alves = new Alves();
$Alves->exibirNome();
