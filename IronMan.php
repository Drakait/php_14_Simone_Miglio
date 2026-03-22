<?php

require "Jarvis.php";

class IronMan {

    use Jarvis;

    public static $counter = 0;

    public $attack1;
    public $attack2;
    public $move;

    public function __construct($a1, $a2, $m) {
        $this->attack1 = $a1;
        $this->attack2 = $a2;
        $this->move = $m;

        self::$counter++;
    }

    public function attaccoDestro() {
        $this->attack1->attack1();
    }

    public function attaccoSinistro() {
        $this->attack2->attack2();
    }

    public function muoviti() {
        $this->move->move();
    }
}
