<?php

class Mentor implements Observador
{
    public function __construct(
        private string $nombreMentor
        ) {}

    public function notificar($nombreTarea)
    {
        echo "Hola {$this->nombreMentor}, tienes una nueva entrega: '$nombreTarea'" . PHP_EOL;
    }
}