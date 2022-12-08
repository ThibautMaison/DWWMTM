<?php
require_once "ClassCadre.php";
require_once "ClassEmploye.php";

$employe1 = new Employe ("jean","neymar",1850389546458,1500.56,"soudeur");
$employe2 = new Employe ("Simon","Jeremy",179028955812,1700.47,"assistant mécanicien");
$employe3 = new Employe ("Odile","Deray ",285097154678,1900.14,"magasinière");
$employes = [$employe1, $employe2,$employe3];

$cadre1 = new Cadre ("Alain","Deloin",1840259453666,2100.23,"chef maintenance","cadre", [$employe1->getNom(), $employe2->getNom()]);

foreach ($employes as $employe) {
    echo $employe->presentation();
    echo $employe->PresentationJob();
    }
echo $cadre1->presentationCadre();
echo $cadre1->manage();
echo $cadre1->CalculSalaire($employe1,0.10);
echo $cadre1->CalculSalaire($employe2,0.20);

?>
