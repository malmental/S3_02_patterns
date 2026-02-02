<?php
require_once 'Cartera.php';
require_once 'LlavesDeCasa.php';
require_once 'LlavesDeTransporte.php';
require_once 'TarjetaDeTransporte.php';
require_once 'TelefonoInteligente.php';
require_once 'EnumLlavesDeTransporte.php';
require_once 'Persona.php';

// Creamos las dependencias
$cartera = new Cartera(2.50);
$llavesDeCasa = new LlavesDeCasa('LLaves de casa');
$telefonoInteligente = new TelefonoInteligente(80);
$tarjetaDeTransporte = new TarjetaDeTransporte(1.80);
$llavesDeTransporte = new LlavesDeTransporte(TipoDeLlavesTransporte::Auto);

$persona = new Persona('Culto del Bosque', $cartera, $llavesDeCasa, $llavesDeTransporte, $tarjetaDeTransporte, $telefonoInteligente);

echo $persona->prepararSalida();
