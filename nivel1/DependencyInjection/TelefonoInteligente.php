<?php

class TelefonoInteligente
{
    public function __construct(
        private int $bateria
    ) {}

    public function verificarTelefonoInteligente(): bool
    {
        echo 'Verificando el telefono y el estado de la bateria: ' . $this->bateria . PHP_EOL;
        return true;
    }
}