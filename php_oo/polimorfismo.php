<?php 


class Pessoa {


    public function cadastro(){

        echo 'Informe seu CPF';
    }

    public function exclusao(){

        echo 'Exluindo CPF';
    }
}

class Crianca extends Pessoa{


    public function cadastro(){

        echo 'Informe seu RG ou Certidão de nascimento';
        
    }
}

$p = new Pessoa();
$p->cadastro();

echo '<br/>';
$c = new Crianca();
$c->cadastro();

/*
echo $this->exclusao(); referencia ao método

*/ 