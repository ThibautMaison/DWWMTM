<?php ob_start() ?>
<form action="" method="POST">
    <button type="submit" name="animaux">tout les animaux</button>
    <button type="submit" name="chien">chien</button>
    <button type="submit" name="chat">chat</button>
</form>


<?php 
class Personnage {
    public $nom ; 
    public $age ;
    public $animaux ;


    public function __construct($nom,$age,$animaux){
    $this -> nom = $nom;
    $this -> age = $age;
    $this -> animaux = $animaux; 
    }

    // public function ecrire(){
    //     echo $this-> nom . $this-> age . $this-> animaux ; 
    // }

}  
$perso1 = new personnage("Marie",5,"chien");
$perso2 = new personnage("pierre",7,"chat");
$perso3 = new personnage("riri",9,"chat");
$perso4 = new personnage("fifi",2,"chien");

$tab = [$perso1,$perso2,$perso3,$perso4];

if (isset($_POST["animaux"])|| isset($_POST["chat"]) || isset($_POST["chien"]) ) {
    foreach ($tab as $perso) {
        if (($perso->animaux == "chat") && ($perso->animaux == "chien"))  {
        echo $perso->nom . " " . $perso->age . " " .  $perso->animaux . "\n";
        }
    }
}
?>
<?php
$titre = "Exo Moyen 5bis";
$content = ob_get_clean();
require "template.php";
?>