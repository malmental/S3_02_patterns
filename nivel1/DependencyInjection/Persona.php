<?php
require_once 'Cartera.php';
require_once 'LlavesDeCasa.php';
require_once 'LlavesDeTransporte.php';
require_once 'TelefonoInteligente.php';

class Persona
{
    public function __construct(
        private string $nombre,
        private Cartera $cartera,
        private LlavesDeCasa $llavesDeCasa,
        private LlavesDeTransporte $llavesDeTransporte,
        private TarjetaDeTransporte $tarjetaDeTransporte,
        private TelefonoInteligente $telefonoInteligente,
    ) {}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function prepararSalida(): void
    {
        echo 'Persona: ' . $this->nombre. PHP_EOL;
        $this->cartera->verificarCartera();
        $this->llavesDeCasa->verificarLlaves();
        $this->llavesDeTransporte->verificarLlavesTransporte();
        $this->tarjetaDeTransporte->verificarTarjetaDeTransporte();
        $this->telefonoInteligente->verificarTelefonoInteligente();
    }
    
}