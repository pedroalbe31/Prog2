<?php
abstract class Pagamento {
    
    abstract public function processar();
}

class Cartao extends Pagamento {
    public function processar() {
        echo "Processando pagamento com Cartão de Crédito...\n";
        echo "Verificando limite, comunicando com a operadora...\n";
    }
}

class Pix extends Pagamento {
    public function processar() {
        echo "Processando pagamento com Pix...\n";
        echo "Gerando código QR ou chave Pix...\n";
    }
}

class Boleto extends Pagamento {
    public function processar() {
        echo "Processando pagamento com Boleto...\n";
        echo "Gerando linha digitável e código de barras...\n";
    }
}

$pagamentoCartao = new Cartao();
$pagamentoPix = new Pix();
$pagamentoBoleto = new Boleto();

echo "--- Pagamento via Cartão ---\n";
$pagamentoCartao->processar();

echo "\n--- Pagamento via Pix ---\n";
$pagamentoPix->processar();

echo "\n--- Pagamento via Boleto ---\n";
$pagamentoBoleto->processar();

?>