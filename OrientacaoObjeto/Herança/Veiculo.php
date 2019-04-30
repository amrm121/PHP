<?php

class Veiculo{

    private $modelo;
    private $cor;
    private $ano;

    public function testeModelo(){

        switch($this->modelo):
            case 'Uno':
                echo $this->modelo;
            break;

            case 'Uno com escada':
                echo 'Sá porra corre para caralho';
            break;
            default:
                echo 'Tomar na porra';
            break;

        endswitch;
    }

    public function Parar(){
        echo 'Parou';

    }

	public function setModelo($modelo){

		$this->modelo = $modelo;
	}

	public function getModelo(){

		return $this->modelo;
    }
    
    public function setCor($cor){

		$this->cor = $cor;
	}

	public function getCor(){

		return $this->cor;
    }
    
    public function setAno($ano){

		$this->ano = $ano;
	}

	public function getAno(){

		return $this->ano;
	}

}


