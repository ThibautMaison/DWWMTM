<?php
require ("./service/fonctions.php");
spl_autoload_register('chargerClasse');

$personne = new PersonneIF("tintin","03/03/1920",3000.34);
echo $personne->getNom(). "\n";
echo $personne->getDateNaissance(). "\n";
echo $personne->getSalaire();

?>