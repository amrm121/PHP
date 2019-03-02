<?php

//Atributos e Métodos estáticos não é necessário instanciar 
class Login{

    public static $login;

    //Método estático
    public static function verificaLogin(){

        //Exibir atributo estático
        echo self::$login.' logado com sucesso';
        
    }



}

//Atribuindo valor a atributo estático
Login::$login = 'Leandro';

//Chamando método estático
Login::verificaLogin();


