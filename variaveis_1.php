<?php

/*


#Global & Local

$var_global = 40;


function soma (){
    //Define que a variável $var_global é global
    global $var_global;
    
    //Define que a variável $var_local é local
    $var_local = 40;

    //Teste da variaveis
    return $var_global + $var_local;
}

//Exibe $var_global na tela
echo "$var_global";

//Tenta exibir $var_local, pórem não encontra fora da função 
echo "$var_local";

//Exibe valor de retorno da função
echo soma();


#Variáveis geradas dinamicamente


$y = 'x';

$$y = "Seu valor é x";

echo "$y <br/>";

echo $x;
*/

#Constantes

//Sempre definir constante MAIÚSCULA

define('CONSTANTE','Leandro');  //True = ConstanteMAIÚSCULA False = Constanteminúscula

// Verifica sé constante estar definida
if (defined('CONSTANTE')) { 
    echo 'Constante Definida <br/>';
    echo 'Valor da constante: '.CONSTANTE;
}

//Caso não esteja 
if (!defined('CONSTANTE')){ // ! Contrário a condição
    echo 'Constante não Definida <br/>';
    define('CONSTANTE','1500');
    echo "Valor Definido ".CONSTANTE;
}

?>
