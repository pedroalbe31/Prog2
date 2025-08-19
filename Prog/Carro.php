<?php 

class Carro{
    //Seu atributos
    public $marca;
    public $modelo;
    public $ano;

    //Seu motodo aqui
    public function exibirinformacoes ()
    {
        echo "Modelo do carro: " . $this->marca . ", Modelo: " . $this->modelo . " e ano:" . $this->ano ."";
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Volksvagen";
$meuCarro->modelo = "Gol";
$meuCarro->ano = 2020;

$meuCarro->exibirinformacoes(); //Deve mostra os dados do carro

?>