
<?php

class Player {
    private static $player = [];
    private $arme;
    private $nom ; 
    private $force ;
    private $PV;


    public function __construct($nom,$force,$PV,$arme){
    $this -> arme = $arme;
    $this -> nom = $nom;
    $this -> force = $force;
    $this -> PV = $PV;
    self::$player[] = $this;
    }

    public function presentationPlayer(){
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Puissance du personnage : </b>" . $this->force  . "<br/>";
        echo "<b>Point de vie : </b>" . $this->PV . "<br/>";
        echo "<b>Arme : </b>" . "<br/>";
    }

    public function getnom(){return $this->nom;}
    public function getnombreforce(){return $this->force;}
    public function getnombrePV(){return $this->PV;}
    public function getnombreArme(){return $this->arme;}
    public static function getListPlayer(){return self::$player;}
}
?>