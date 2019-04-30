<?php

//Exception code, file, line, message
class Email{


    public function cadastrarEmail($email){


        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):

            throw new Exception("Email INVALIDO", 1);

        else:
            echo 'Email CORRETO';
        endif;
    }

}

$mail = new Email();
try{
    $mail->cadastrarEmail('leogmail.com');

}catch(Exception $e){
    echo $e->getMessage();
    echo ' Erro na linha: '.$e->getLine().'<br>';
}