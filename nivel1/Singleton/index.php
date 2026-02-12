<?php
require_once 'Tigger.php';

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();

echo 'Instancias de Tigger: ' . $tigger->getCounter();