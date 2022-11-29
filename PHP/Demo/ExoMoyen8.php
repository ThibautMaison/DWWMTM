<?php ob_start() ?>
<form action="" method="POST">
    <button type="submit" name="animaux">tout les animaux</button>
    <button type="submit" name="chien">chien</button>
    <button type="submit" name="chat">chat</button>
</form>

<?php 
class Personnage {
    private $nom ; 
    private $age ;
    private $animaux ;


    public function __construct($nom,$age,$animaux){
    $this -> nom = $nom;
    $this -> age = $age;
    $this -> animaux = $animaux; 
    }

    public function getNom(){return $this->nom;}
    public function getAge(){return $this->age;}
    public function getAnimaux(){return $this->animaux;}
}  
$perso1 = new personnage("Marie",5,"chien");
$perso2 = new personnage("pierre",7,"chat");
$perso3 = new personnage("riri",9,"chat");
$perso4 = new personnage("fifi",2,"chien");

$tab = [$perso1,$perso2,$perso3,$perso4];

if (isset($_POST["animaux"])) {
    foreach ($tab as $perso) {
        echo $perso->getNom() . " " . $perso->getAge() . " " .  $perso->getAnimaux() . "\n";
        }
    }

if (isset($_POST["chat"])) {
    foreach ($tab as $perso) {
            if ($perso->getAnimaux() == "chat") {
                echo $perso->getNom() . " " . $perso->getAge() . " " .  $perso->getAnimaux() . "\n";
            }          
    }
}
if (isset($_POST["chien"])) {
    foreach ($tab as $perso) {
            if ($perso->getAnimaux() == "chien") {
                echo $perso->getNom() . " " . $perso->getAge() . " " .  $perso->getAnimaux() . "\n";
            }
        }            
    }
?>
<?php
$titre = "Exo Moyen 5";
$content = ob_get_clean();
require "template.php";
?>