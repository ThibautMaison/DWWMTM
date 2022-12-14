<?php
require_once("Personne.class.php");

class Eleve extends Personne{
    private $classe;

    public function __construct($nom,$prenom,$classe){
        $this->classe = $classe;
        parent::__construct($nom,$prenom);

    }
    public function getClasse(){return $this->classe;}

    public function setClasse($classe){
        $this->classe = $classe;
    }

}

?>