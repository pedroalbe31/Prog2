<?php 

class Aluno {
    //Seus atributos aqui 
    public $nome;
    public $media;

    //Seu método aqui
    public function verificarAprovacao()
    {
        return $this->media >= 7;
    }

}
//Código para testa sua classe
$aluno1 = new Aluno();
$aluno1->nome = "Ana";
$aluno1->media = 8.5;

$aluno2 = new Aluno();
$aluno2->nome = "Pedro";
$aluno2->media = 6.0;

//Exibir resultados
echo $aluno1->nome . "" . ($aluno1->verificarAprovacao() ? " Aprovado <br>" : " Reprovado <br>"). "";
echo $aluno2->nome . "" . ($aluno2->verificarAprovacao() ? " Aprovado <br>" : " Reprovado <br>"). "";

?>