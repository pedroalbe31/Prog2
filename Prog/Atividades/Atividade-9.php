<?php

abstract class Mensagem {
    protected $texto;
    
    public function __construct($texto) {
        $this->texto = $texto;
    }

    abstract public function formatar();
}

class Maiusculo extends Mensagem {
    
    public function formatar() {
        return strtoupper($this->texto);
    }
}

class Minusculo extends Mensagem {
    
    public function formatar() {
        return strtolower($this->texto);
    }
}

class Capitalizado extends Mensagem {
    
    public function formatar() {
        return ucwords($this->texto);
    }
}

$textoOriginal = "exemplo de texto para formatação.";

$mensagemMaiusculo = new Maiusculo($textoOriginal);
$mensagemMinusculo = new Minusculo($textoOriginal);
$mensagemCapitalizado = new Capitalizado($textoOriginal);

echo "Texto Original: {$textoOriginal}\n";

echo "--- Textos Formatados ---\n";
echo "Maiúsculo: " . $mensagemMaiusculo->formatar() . "\n";
echo "Minúsculo: " . $mensagemMinusculo->formatar() . "\n";
echo "Capitalizado: " . $mensagemCapitalizado->formatar() . "\n";

?>