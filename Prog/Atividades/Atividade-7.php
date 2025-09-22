<?php

abstract class Veiculo {
    
    abstract public function mover();
}

class Carro extends Veiculo {
    
    public function mover() {
        echo "O carro está se movendo pela estrada.\n";
    }
}

class Bicicleta extends Veiculo {
    
    public function mover() {
        echo "A bicicleta está sendo movida pela força das pernas do ciclista.\n";
    }
}

class Aviao extends Veiculo {
    
    public function mover() {
        echo "O avião está decolando e voando pelo céu.\n";
    }
}

$meuCarro = new Carro();
$minhaBicicleta = new Bicicleta();
$meuAviao = new Aviao();

echo "--- Cenário de Movimentação ---\n";
$meuCarro->mover();
$minhaBicicleta->mover();
$meuAviao->mover();

?>