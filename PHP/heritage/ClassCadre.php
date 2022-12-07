<?php 
require_once "ClassEmploye.php";
require_once "index.php";

class Cadre extends Employe {

    private static $employe = [];

        private $statue;

        public function __construct($nom,$prenom,$numSecu,$salaire,$job,$statue){
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> numSecu = $numSecu; 
            $this -> salaire = $salaire;
            $this -> job = $job;
            $this -> statue = $statue;
            self::$employe[] = $this;
        }

        public function getListEmploye(){return self::$statue;}

        public function setnom($statue){$this->statue = $statue;return $this;}

        public function presentationCadre()
        {
            echo "<b>Nom: " . $this->nom . "<br/>";
            echo "<b>Prénom: " . $this->prenom . "<br/>";
            echo "<b>Numero de sécurité social: " . $this->numSecu . "<br/>";
            echo "<b>salaire: " . $this->salaire  . "<br/>";
            echo "<b>job: " . $this->job . "<br/>";
            echo "Statue: " . $this->statue . "<br/>";
            echo "------------------------------------------------------------". "<br/>";
        }

        public function CalculSalaire(Employe $employe1){
            $employe1->setsalaire() * 1.10 ;
        }


}