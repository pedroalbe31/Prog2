<?php

abstract class Transporte {
    
    abstract public function calcularTarifa();
}

class Onibus extends Transporte {
    public function calcularTarifa() {
        return 4.50;
    }
}

class Metro extends Transporte {
    public function calcularTarifa() {
        return 5.00;
    }
}

class Taxi extends Transporte {
    private $distancia;
    private $bandeirada = 5.00;
    private $tarifaPorKm = 2.50;

    public function __construct($distancia) {
        $this->distancia = $distancia;
    }

    public function calcularTarifa() {
        return $this->bandeirada + ($this->distancia * $this->tarifaPorKm);
    }
}

$tarifaOnibus = new Onibus();
$tarifaMetro = new Metro();
$tarifaTaxi = new Taxi(10);

echo "--- Tarifas de Transporte ---\n";
echo "Tarifa do ônibus: R$ " . number_format($tarifaOnibus->calcularTarifa(), 2, ',', '.') . "\n";
echo "Tarifa do metrô: R$ " . number_format($tarifaMetro->calcularTarifa(), 2, ',', '.') . "\n";
echo "Tarifa do táxi (10km): R$ " . number_format($tarifaTaxi->calcularTarifa(), 2, ',', '.') . "\n";

?>