<?php

class Conta{
    private $titular;
    private $saldo;
    private $numeroConta;
    
    public function __construct($titular, $saldoInicial){
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
        $this->numeroConta = rand(1000, 9999);
    }
    public function exibirDados(){
        echo "Nome do titular: " . $this->titular . ". <br> Número da Conta: " . $this->numeroConta  . ". <br> E seu saldo é: " . $this->saldo . " .";
    }
    
    public function depositar ($valorDepositado){
        if ($valorDepositado > 0){
            $this->saldo += $valorDepositado;
            echo"Depósito de R$ {$valorDepositado} realizado com sucesso!<br><br>";
        }
        else
        {
            echo "Favor depositar um valor maior que zero.";
        }
    }
}


$conta1 = new Conta("Carlos Silva", 500);
$conta2 = new Conta("Ana Oliveira", 1200);


$conta1->exibirDados();
$conta1->depositar(300);
$conta1->exibirDados();

?>