<?php

class Cartera
{
    public function __construct(
        private float $dinero,
        ) {}

    public function verificarCartera(): bool
    {
        echo 'Llevas tu cartera contigo con: ' . $this->dinero;
        return true;
    }
}