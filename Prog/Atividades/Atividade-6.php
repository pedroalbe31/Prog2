<?php

class Relatorio {
    
    public function __call($nomeMetodo, $argumentos) {
        if ($nomeMetodo == 'gerar') {
            
            $numArgumentos = count($argumentos);
            
            if ($numArgumentos == 1) {
                $tipo = $argumentos[0];
                echo "Gerando relatório do tipo '{$tipo}'.\n";
                echo "Filtro: Não especificado.\n";
            } elseif ($numArgumentos == 2) {
                $tipo = $argumentos[0];
                $filtro = $argumentos[1];
                echo "Gerando relatório do tipo '{$tipo}' com filtro '{$filtro}'.\n";
            } else {
                echo "Erro: O método 'gerar' com {$numArgumentos} argumentos não é suportado.\n";
            }
        } else {
            echo "Erro: Método '{$nomeMetodo}' não existe na classe " . get_class($this) . ".\n";
        }
    }
}

$relatorio = new Relatorio();

echo "--- Cenário 1: Chamada com 1 argumento ---\n";
$relatorio->gerar('Vendas');

echo "\n--- Cenário 2: Chamada com 2 argumentos ---\n";
$relatorio->gerar('Financeiro', 'por Mês');

echo "\n--- Cenário 3: Chamada com 3 argumentos (inválida) ---\n";
$relatorio->gerar('Marketing', 'por Produto', 'por Ano');

echo "\n--- Cenário 4: Chamada a um método que não existe ---\n";
$relatorio->outroMetodo('Teste');

?>