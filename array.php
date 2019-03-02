<?php
/*Criando Array
    $array= array ('Valor 1','Valor 2','Valor 3'); 1º Forma de Armazenar os Valores do Arra

        print_r($array); //Exibe todos os valores do array

    echo '<br/>';

        echo $array[0]; //Exibe valor expecifico atráves da chave | !Array inicia com chave [0]

/* Apaganda Valor do Indíce
        
        unset ($array[0]); // Apaga valor do indíce 0 | Apagar todo o array é necessário foreach para percorre-ló
    
        echo $array[0]; //Exibe erro, pois valor do indíce foi apagado | Função echo APENAS um valor do array


/*Inicia o Array com a chave que deseja

    $array[1]= ("Valor 1"); // Inicia Array com Chave [1] 
    $array[]=("Valor 2");  // 2º Forma de Armazenar os Valores do Array | PHP incrementa de forma_auto



/*Define o nome que voçê quiser para a chave
    $array=array('1','2','3',"Valor_4"=>"4");

    //Condição verifica sé o nome da chave existe
    if ($array["Valor_4"]){
        echo 'Valor encontrado com sucesso <br/>'; 
        print_r($array["Valor_4"]);



/*Mudando Valor do Arry    
    $array= array (1,2,3);
        echo "Valores do ";
            print_r($array); //Exibe todo o Array
        
        echo "<br/>";
            $array[0]='Leandro Alves'; //Altera valor do DADO no indíce 0 | Caso o ARRAY não exista, ele será criado

        echo $array[0]; 


/*Apaga todos os Items de uma array

    $array= array(1,2,3);
        foreach ($array as $chave => $valor){
            unset($array[$chave]);
    }

    echo 'Valores do '; print_r($array); 
    echo '<br/>';    
    echo 'Quantidade de Item no ARRAY: ', count ($array); //Conta quantos item tem o array



/*Pecorrendo Array

    $array= array('Maça','Laranja','Ovos');

    foreach ($array as $valor){ //Pactura apenas valor
        echo '<b>Mostrando valor: </b>';
        echo 'Eu gosto de comer '.$valor.' no café da manhã <br/>';
}

    echo '<br/>';
    
    $array_1= array('Maça','Laranja','Ovos');

    foreach ($array_1 as $key => $value){
        echo '<b>Mostrando valor e indíce: </b>';
        echo "Indíce: [$key] Eu gosto de comer <u>$array[$key]</u> no café da manhã. <br/>";
    }


/*Criando array multidimensional

$array = array(
    'paises'=> array(
           'Brasil',
           'Argentina',
           'Chile'
    ),   
    'anos'=>array(
           2018,
           1990,
           2000
    ),

);

print_r($array);

//$array['paises'][0] = 'Equador'; //Modifica o array paises chave 0


Acesse Key => Sua hierarquia deve estar entre colchetes após o nome do array. 
echo $array['paises'][0];
*/