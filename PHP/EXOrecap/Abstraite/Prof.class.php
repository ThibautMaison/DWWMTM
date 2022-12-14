<?php
require_once("Personne.class.php");

class Prof extends Personne{
    private $specilite;

    public function __construct($nom,$prenom,$specialite){
        $this->specilite = $specialite;
        parent::__construct($nom,$prenom);
    }

    public function getSpecialite(){return $this->specilite;}
    public function setSpecialite($specialite){
        $this->specialite = $specialite;
    }
}


?>