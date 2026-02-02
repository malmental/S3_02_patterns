<?php

class TarjetaDeTransporte
{
    public function __construct(
        private float $saldo
    ) {}

    public function verificarTarjetaDeTransporte(): bool
    {
        echo 'La tarjeta es para pagar el transporte y tiene de saldo: ' . $this->saldo . '€' . PHP_EOL;
        return true;
    }
}