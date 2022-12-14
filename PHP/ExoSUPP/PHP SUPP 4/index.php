<?php
require "Class.php";

$lapin = new Lapin("blanc","4","En Vie");

$chasseur = new Chasseur ("toto","fusil");

echo $chasseur->seDeplacer() . "\n";
echo $lapin->crier() . "\n";
echo $chasseur->chasser() . "\n";
echo $lapin->fuir() . "\n";
echo $lapin->crier() . "\n";
echo 'le pauvre petit lapin blanc est heureusement mort'. "\n";