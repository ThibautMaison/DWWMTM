<?php
 ob_start() ?>
<?php 

class Livre {
    private $titre ; 
    private $edition ;
    private $auteur ;
    private $date ;

    public function __construct($titre,$edition,$auteur,$date){
    $this->titre = $titre;
    $this->edition = $edition;
    $this->auteur = $auteur; 
    $this->date = $date;
    }

    public function getTitre(){return $this->titre;}
    public function getEdition(){return $this->edition;}
    public function getAuteur(){return $this->auteur;}
    public function getDate(){return $this->date;}
    
    function __toString(){return "Le titre du livre est " . $this->titre ."  " ." L'edition est " . $this->edition ."  " . " L'auteur est " . $this->auteur ."  " . " La date de parrution est: " . $this->date;}
    }

    $livre1 = new Livre("Livre 1","fnac","auteur1","2010");
    $livre2 = new Livre("Livre 2","fnac","auteur2","2019");
    $livre3 = new Livre("Livre 3","fnac","auteur3","2002");
    $livre4 = new Livre("Livre 4","fnac","auteur4","1996");

    echo $livre1  ;
    $tab = [$livre1 ,$livre2 ,$livre3 ,$livre4]
?>
<form action="" method="POST">
    <input type="text" name="edition" placeholder="Edition du livre" />
    <input type="text" name="date" placeholder="Date du livre" />
    <button type="submit" name="submit">Entrez</button>
</form>
<?php
if (isset($_POST["submit"])){
    foreach($tab as $livre){
    if($_POST['date'] == $livre->getDate()){
        echo " le titre du livre est " . $livre->getTitre() .  " , " . " l'edition est " . $livre->getEdition() . " , " . " l'auteur est " . $livre->getAuteur() ;?><br><?php 
        }
    }
}
if (isset($_POST["submit"])){
    foreach($tab as $livre){
    if($_POST['edition'] == $livre->getedition()){
        echo " le titre du livre est " . $livre->getTitre() . " , " . " l'auteur est " . $livre->getAuteur() . " , " . " la date de parrution est " . $livre->getdate()  ;?><br><?php 
        }
    }
}
?>
<?php
$titre = "Exo 8";
$content = ob_get_clean();
require "template.php";
?>