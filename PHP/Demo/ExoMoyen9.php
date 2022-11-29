<?php ob_start() ?>
<?php 
class Voiture {
    private $marque ; 
    private $model ;
    private $couleur ;
    private $nombreporte ;
    private $type ;


    public function __construct($marque,$model,$couleur,$nombreporte,$type){
    $this -> marque = $marque;
    $this -> model = $model;
    $this -> couleur = $couleur; 
    $this -> nombreporte = $nombreporte;
    $this -> type = $type;
    }

    public function getmarque(){return $this->marque;}
    public function getmodel(){return $this->model;}
    public function getcouleur(){return $this->couleur;}
    public function getnombreporte(){return $this->nombreporte;}
    public function gettype(){return $this->type;}
}  
$voiture1 = new Voiture("Audi","RS3","noir","5","non electrique");
$voiture2 = new Voiture("Tesla","ModelS","rouge","5","electrique");
$voiture3 = new Voiture("Citroen","C3","bleu","3","non electrique");
$voiture4 = new Voiture("BMW","E46","gris","5","non electrique");

$tab = [$voiture1,$voiture2,$voiture3,$voiture4];

echo "Toutes les voitures sont :";?><br><?php 
foreach ($tab as $voiture) {
    echo " Marque: " . $voiture->getmarque() .  " , " . " Model: " . $voiture->getmodel() . " , " . " Couleur: " . $voiture->getcouleur() . " , " . " Nombre de porte: " . $voiture->getnombreporte() . " , " . " Type: " . $voiture->gettype() . " . " ;?><br><?php
    }

?><br><br><?php 
echo "Toutes les marques sont :";?><br><?php 
    foreach($tab as $voiture){
        echo  $voiture->getmarque() .  " ";?><br><?php
    }
?>
<br><br>
<form action="" method="POST">
    <input type="text" name="text" />
    <button type="submit" name="submit">Entrez</button>
</form>
<?php
if (isset($_POST["submit"])){
    foreach($tab as $voiture){
    if($_POST['text'] == $voiture->getmarque()){
        echo " Marque: " . $voiture->getmarque() .  " , " . " Model: " . $voiture->getmodel() . " , " . " Couleur: " . $voiture->getcouleur() . " , " . " Nombre de porte: " . $voiture->getnombreporte() . " , " . " Type: " . $voiture->gettype() . ". " ;?><br><?php 
}
}
}
?>
<?php 
$titre = "Exo Moyen 5";
$content = ob_get_clean();
require "template.php";
?>