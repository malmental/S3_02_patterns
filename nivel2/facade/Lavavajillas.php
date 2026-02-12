<?php

class Lavavajillas
{
    public function __construct(
        protected Agarrar $primerModulo,
        protected Colocar $segundoModulo,
        protected Enjabonar $tercerModulo,
        protected Enjuagar $cuartoModulo
    ) {}

    public function colocarPastillaDeLavar()
    {
        echo 'Colocando pastilla de lavado' . PHP_EOL;
    }

    public function iniciarLavado()
    {
        echo 'Lavado iniciado' . PHP_EOL;
        $this->primerModulo->agarrarLoza();
        $this->segundoModulo->colocarLoza();
        $this->tercerModulo->enjabonarLoza();
        $this->cuartoModulo->enjuagarLoza();
    }
}