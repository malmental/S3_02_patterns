<?php
require_once 'Agarrar.php';
require_once 'Colocar.php';
require_once 'Enjabonar.php';
require_once 'Enjuagar.php';
require_once 'Lavavajillas.php';

$agarrar = new Agarrar();
$colocar = new Colocar();
$enjabonar = new Enjabonar();
$enjuagar = new Enjuagar();

$lavavajillas = new Lavavajillas($agarrar, $colocar, $enjabonar, $enjuagar);
$lavavajillas->iniciarLavado();