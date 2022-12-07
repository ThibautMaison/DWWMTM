<?php
require_once "ClassCadre.php";
require_once "ClassEmploye.php";

$employe1 = new Employe ("jean","neymar",1850389546458,1500.56,"soudeur");
$employe2 = new Employe ("Simon","Jeremy",179028955812,1700.47,"assistant mécanicien");
$employe3 = new Employe ("Odile","Deray ",285097154678,1900.14,"magasinière");
$employes = [$employe1, $employe2,$employe3];

$cadre1 = new Cadre ("Alain","Deloin",1840259453666,2100.23,"chef maintenance","cadre");

foreach ($employes as $value) {
    if($value->getjob() == "soudeur"){
        echo "bonsoir je suis soudeur";
    }if($value->getjob()== "assistant mécanicien"){
        echo "bonsoir je suis assistant";
    }if($value->getjob()== "magasinière"){
        echo "bonsoir je suis magasinière";
    }
}

foreach ($employes as $employe) {
    echo $employe->presentation();
    echo $employe->PresentationJob();
    }
echo $cadre1->presentationCadre();
?>
