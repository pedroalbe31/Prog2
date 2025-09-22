<?php
class Calculadora {
    
    public function somar($a, $b, $c = 0) {
        return $a + $b + $c;
    }
}

$calculadora = new Calculadora();

$resultado1 = $calculadora->somar(5, 10);
echo "A soma de 5 e 10 é: " . $resultado1 . "\n";

$resultado2 = $calculadora->somar(5, 10, 15);
echo "A soma de 5, 10 e 15 é: " . $resultado2 . "\n";

?>