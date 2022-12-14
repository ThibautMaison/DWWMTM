<?php
require_once("Salarie.class.php");

$tintin = new Personne("Tintin", 30);

// echo $tintin->getNom() . " a " . $tintin->getAge() . " ans \n";
echo $tintin->getInfos();

$haddock = new Salarie("Haddock",50,3000);

// echo "Le salarié ". $haddock->getNom() ." est agé de " . $haddock->getAge() . " ans et gagne ". $haddock->getSalaire() . " euros";
echo $haddock->getInfos();

?>