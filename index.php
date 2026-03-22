<?php

require "Razzo.php";
require "Spada.php";
require "Volo.php";
require "IronMan.php";

// crea ironman casuali
$esercito = [];

for ($i = 0; $i < 10; $i++) {

    $attack1 = new Razzo();
    $attack2 = new Spada();
    $move  = new Volo();

    $esercito[] = new IronMan($attack1, $attack2, $move);
}

// esempio per capire se funziona 
// $esercito[0]->attaccoDestro();
// $esercito[0]->attaccoSinistro();
// $esercito[0]->muoviti();
// $esercito[0]->jarvis();

$mk1 = new IronMan(new Razzo(), new Razzo(), new Volo());
print_r($mk1);
echo "Ironman creati: " . IronMan::$counter . "\n";
