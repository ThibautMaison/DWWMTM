<?php
require_once("Personne.class.php");

class Salarie extends Personne{

    private $salaire;

    public function __construct($nom, $age, $salaire){
        $this->nom = $nom;
        $this->age = $age;
        $this->salaire = $salaire;
    }

    public function getSalaire(){return $this->salaire;}
    public function setSalaire($salaire){$this->salaire = $salaire;}

    public function getInfos()
    {
        return $this->nom . " a ". $this->age . " ans et gagne ". $this->salaire . " euros";
    }

}

?>