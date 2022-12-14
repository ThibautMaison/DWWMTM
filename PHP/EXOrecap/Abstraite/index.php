<?php
require_once("Prof.class.php");
require_once("Eleve.class.php");

//Interdit
// $personne = new Personne("p","p");

$prof = new Prof("James","Bond","Maths \n");
$eleve = new Eleve("Fox","Mulder","Terminale");

echo $prof->getNom() . " " . $prof->getPrenom(). " est un spécialiste en " . $prof->getSpecialite();
echo $eleve->getNom() . " " . $eleve->getPrenom() . " est en " . $eleve->getClasse();

?>