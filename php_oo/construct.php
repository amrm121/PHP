<?php

echo '<title> __Construct</title>';

class Con{

    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }


    public function getSenha(){
        return $this->senha;
    }

    public function getEmail(){
        return $this->senha;
    }

    public function getNome(){

        return $this->nome;
    }

}

$con = new Con('leo@gmail.com',123,'Leandro');

echo $con->getEmail();