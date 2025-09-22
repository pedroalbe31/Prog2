<?php

abstract class Notificacao {
    
    abstract public function enviar();
}

class Email extends Notificacao {
    public function enviar() {
        echo "Enviando notificação por Email...\n";
        echo "Configurando servidor SMTP, formatando o corpo do email...\n";
    }
}

class SMS extends Notificacao {
    public function enviar() {
        echo "Enviando notificação por SMS...\n";
        echo "Conectando com a API da operadora, verificando o número do celular...\n";
    }
}
class Push extends Notificacao {
    public function enviar() {
        echo "Enviando notificação Push...\n";
        echo "Comunicação com o serviço de notificação (FCM, APNS), enviando o pacote...\n";
    }
}

$notificacaoEmail = new Email();
$notificacaoSMS = new SMS();
$notificacaoPush = new Push();

echo "--- Notificação via Email ---\n";
$notificacaoEmail->enviar();

echo "\n--- Notificação via SMS ---\n";
$notificacaoSMS->enviar();

echo "\n--- Notificação via Push ---\n";
$notificacaoPush->enviar();

?>