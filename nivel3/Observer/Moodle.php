<?php

class Moodle 
{
    private $mentores = [];

    public function anadirMentor(Observador $mentor) 
    {
        $this->mentores[] = $mentor;
    }

    public function nuevaEntregaParaNotificar($nombreTarea) 
    {
        echo "Nueva tarea subida: $nombreTarea" . PHP_EOL;

        foreach ($this->mentores as $mentor) {
            $mentor->notificar($nombreTarea);
        }
    }
}