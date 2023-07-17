<?php
class Tigger{
    private static ?Tigger $instance = null;
    private int $counter = 0;

    private function __construct() 
    {
        echo "Building character...". PHP_EOL;
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar()
    {
        echo "Grrr!". PHP_EOL;
        $this->counter++;
    }

    public function getCounter()
    {
        return $this->counter;
    }
}?>