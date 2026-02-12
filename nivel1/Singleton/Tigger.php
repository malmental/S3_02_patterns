<?php

class Tigger
{
    private static $instance = null;
    private int $counter = 0;

    private function __construct() 
    {
        echo "Building character" . PHP_EOL;
    }

    public static function getInstance(): Tigger
    {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() 
    {
        echo "Grrr!" . PHP_EOL;
        $this->counter++;
    }

    public function getCounter(): int
    {
        return $this->counter;
    }
}