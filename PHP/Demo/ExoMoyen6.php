<?php ob_start() ?>
<?php 
class Ville {
    public $nom ; 
    public $departement ;


    public function __construct($nom,$departement){
    $this -> nom = $nom;
    $this -> departement = $departement; 
    }

    public function ecrire(){
        echo  "la ville " . $this-> nom ." est dans le département " . $this-> departement ; 
    }
}      
$ville1 = new Ville("Dunkerque","Nord-pas-de-calais");
$ville1-> ecrire()
?>
<?php
$titre = "Exo Moyen 6";
$content = ob_get_clean();
require "template.php";
?>