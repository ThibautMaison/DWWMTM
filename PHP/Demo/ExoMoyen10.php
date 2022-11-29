<?php ob_start() ?>
<?php 
class Stagiaire {
    private string $nom ; 
    private array $notes;


    public function __construct(string $nom,array $notes){
    $this -> nom = $nom;
    $this -> notes = $notes;
    }

    public function getNom(){return $this->nom;}
    public function getNotes(){return $this->notes;}

    public function setNom(){return $this->nom;}
    public function setNotes(){return $this->notes;}
}  
$stagiaire1 = new Stagiaire("Leo",[10,12,8,19]);
$stagiaire2 = new Stagiaire("Lea",[1,4,18,19]);

$tab = [$stagiaire1,$stagiaire2];
foreach($tab as $stagiaire ){
    echo $stagiaire->getNom() . " ";
    echo " a pour moyenne: " . array_sum($stagiaire->getNotes()) /count($stagiaire->getNotes());
    ?><br><?php
    echo "la plus petite note de " . $stagiaire->getNom() . " est de: " . max($stagiaire->getNotes());
    ?><br><?php
    echo "la plus grande note de " . $stagiaire->getNom() . " est de: " . max($stagiaire->getNotes());
    ?><br><?php
    echo "toutes les notes de ". $stagiaire->getNom() . " sont: ";
    foreach( $stagiaire->getNotes() as $notes ){
       echo $notes . " , " ;
    }
    ?><br><?php
    ?><br><?php
}
?>
<?php 
$titre = "Exo Moyen 5";
$content = ob_get_clean();
require "template.php";
?>