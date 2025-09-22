<?php

abstract class FiguraGeometrica {

    abstract public function calcularArea();
}

class Quadrado extends FiguraGeometrica {
    private $lado;
    
    public function __construct($lado) {
        $this->lado = $lado;
    }
    
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends FiguraGeometrica {
    private $raio;
    
    public function __construct($raio) {
        $this->raio = $raio;
    }
    
    public function calcularArea() {
        return M_PI * $this->raio * $this->raio;
    }
}

class Retangulo extends FiguraGeometrica {
    private $largura;
    private $altura;
    
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
    
    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

$quadrado = new Quadrado(5);
$circulo = new Circulo(3);
$retangulo = new Retangulo(4, 6);

echo "A área do quadrado com lado 5 é: " . $quadrado->calcularArea() . "\n";
echo "A área do círculo com raio 3 é: " . number_format($circulo->calcularArea(), 2) . "\n"; // Formata para 2 casas decimais
echo "A área do retângulo com 4x6 é: " . $retangulo->calcularArea() . "\n";

?>