<?php

use Dom\Notation;

class Aluno{
    public $nome;
    private $matricula;
    private $notas;
    private $media;

    public function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = rand(1000, 9999);
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function adicionarNota($Nota1, $Nota2, $Nota3){
        if ($Nota1 && $Nota2 && $Nota3 > 0){
            $this->Nota1;
            $this->Nota2;
            $this->Nota3;
            echo "As notas são Nota 1:" . $Nota1 . ", <br> Nota 2: " . $Nota2 . "<br> Nota 3: " . $Nota3 . "!<br><br>";
        }
        else
        {
            echo "Favor preencher um valor maior que zero.";
        }
    }    
    public function calcularMedia($nota, $novaNota){
       return ($nota) 
    }
    public function situacao(){
        
    }

}

?> 