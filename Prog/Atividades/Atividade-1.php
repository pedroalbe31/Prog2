<?php
class Animal {
    public function falar() {
        echo "O animal está fazendo um som.\n";
    }
}

class Cachorro extends Animal {
    public function falar() {
        echo "O cachorro está fazendo: Au Au!\n";
    }
}
class Gato extends Animal {
    public function falar() {
        echo "O gato está fazendo: Miau!\n";
    }
}
$cachorro = new Cachorro();
$cachorro->falar();

$gato = new Gato();
$gato->falar();

$animalGenerico = new Animal();
$animalGenerico->falar();

?>