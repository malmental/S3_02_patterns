<?php

class LlavesDeTransporte
{
    public function __construct(
        private TipoDeLlavesTransporte $tipo_de_llaves_transporte,
    ) {}

    public function verificarLlavesTransporte(): void
    {
        echo 'Tomaste las llaves del vehiculo: ' . $this->tipo_de_llaves_transporte->value . PHP_EOL;
    }
}