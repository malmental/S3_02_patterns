<?php

class Mentor implements Observador
{
    public function __construct(
        private string $nombreTarea
        ) {}

    public function getNombreTarea(): string
    {
        return $this->nombreTarea;
    }

    public function notificar($nombreTarea)
    {
        echo "Hola {$this->nombreTarea}, ¡tienes una nueva entrega: '$nombreTarea'" . PHP_EOL;
    }
}