<?php 

class ContaBancaria{

    public $titular;
    public $saldo;
    public $valordeposito;

    //metodo depositar e sacar
    public function depositar ($saldo)
    {
        return $this->saldo + $this->valordeposito;
    }
    public function sacar ()
    {
        if ($saldo =+ 0){
            return "Saque efetuado com sucesso";
    }
    else{
        return "Saldo insuficiente para completar a transação";
    }
}
}

$conta1 = new ContaBancaria();
$conta1->titular = "TioPatinhas";
$conta1->saldo = 500.00;
$conta1->valordeposito = 200.00;
?>