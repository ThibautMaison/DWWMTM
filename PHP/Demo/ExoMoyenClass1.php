<?php 
class Arme {
    private static $arme = [];
    private static $id = 0 ;
    private $idArme;
    private $nom ; 
    private $force ;


    public function __construct($nom,$force){
    self::$id=self::$id+1;
    $this -> idArme = self::$id;
    $this -> nom = $nom;
    $this -> force = $force;
    self::$arme[] = $this;
    }

    public function presentationArme(){
        echo "<b>Identifiant : </b>" . $this -> idArme . "<br/>";
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Puissance de l'arme : </b>" . $this->force  . "<br/>";
    }

    public function getnom(){return $this->nom;}
    public function getnombreforce(){return $this->force;}
    public function getListidArme(){return $this -> idArme;}
    public static function getListarme(){return self::$arme;}
}  
?>