<?php

class LlavesDeCasa
{
    public function __construct(
        private string $tipoDeLlaves = ''
    ) {}

    public function verificarLlaves(): bool
    {
        echo 'Llaves verificadas del tipo: ' . $this->tipoDeLlaves . PHP_EOL;
        return true;
    }
}