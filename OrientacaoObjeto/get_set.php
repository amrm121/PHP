<?php

class Login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar(){
        
        if($this->email == 'teste@gmail.com' && $this->senha == 123):
            echo "Logado com sucesso!!!";
        else:
            echo "Dados Invalidos";
        endif;

    }
}

$logar = new Login();

$logar->setEmail('teste()/@gmail.com'); //Setando variáveis
$logar->setSenha('123');



$logar->Logar(); //Chama método

echo '<br>';
echo $logar->getEmail();




