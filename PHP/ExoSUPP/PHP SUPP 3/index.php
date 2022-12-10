<?php
require "Class.php";
$voiture1 = new Voiture("rouge", "Renault", "Kadjar", 0, "essence");
$voiture2 = new Voiture("gris", "Citroën", "C4", 10000, "diesel");

echo $voiture1->afficherDescription(); // Affiche la description de la voiture 1
echo "\n";

echo $voiture2->afficherDescription(); // Affiche la description de la voiture 2
echo "\n";

$voiture1->rouler(500); // La voiture 1 roule pendant 500 km
$voiture2->rouler(100); // La voiture 2 roule pendant 100 km

?>