<?php
require_once 'Observador.php';
require_once 'Mentor.php';
require_once 'Moodle.php';

$moodle = new Moodle();

$profesorPol = new Mentor("Pol");
$profesorLaia = new Mentor("Laia");
$profesorCarles = new Mentor("Carles");

$moodle->anadirMentor($profesorPol);
$moodle->anadirMentor($profesorLaia);
$moodle->anadirMentor($profesorCarles);

$moodle->nuevaEntregaParaNotificar("Ejercicio de la Tasca de Observer");