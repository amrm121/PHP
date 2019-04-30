<?php 


//Class abstrata
abstract class Banco{

    protected $nome;
    protected $saldo;

    //Método abstrato  
    abstract protected function Sacar($s);


    abstract protected function Depositar($d);
    
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

class Itau extends Banco{

    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo 'Saque feito<br>Valor sacado: R$'.$this->saldo;

    }

    public function Depositar($d)
    {
        $this->saldo += $d;
        echo '<br>Deposito feito<br>Valor depositado: R$'.$this->saldo;

    }


}

$Itau= new Itau();

$Itau->setSaldo(1000);

$Itau->Sacar(500);

$Itau->Depositar(450);




