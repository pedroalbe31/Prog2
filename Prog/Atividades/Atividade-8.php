<?php

abstract class Impressora {
    
    abstract public function imprimir();
}

class PDF extends Impressora {
    
    public function imprimir() {
        echo "Imprimindo arquivo PDF... Interpretando vetores e fontes.\n";
    }
}

class Texto extends Impressora {
    
    public function imprimir() {
        echo "Imprimindo arquivo de texto... Renderizando caracteres simples.\n";
    }
}

class Imagem extends Impressora {
    
   
    public function imprimir() {
        echo "Imprimindo arquivo de imagem... Convertendo pixels e cores.\n";
    }
}


$arquivoPDF = new PDF();
$arquivoTexto = new Texto();
$arquivoImagem = new Imagem();

echo "--- Cenário de Impressão ---\n";
$arquivoPDF->imprimir();
$arquivoTexto->imprimir();
$arquivoImagem->imprimir();

?>