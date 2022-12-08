<?php 
require_once "ClassEmploye.php";
require_once "index.php";

class Cadre extends Employe {

    private $listemploye ;

    private $statue;

        public function __construct($nom,$prenom,$numSecu,$salaire,$job,$statue,$listemploye){
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> numSecu = $numSecu; 
            $this -> salaire = $salaire;
            $this -> job = $job;
            $this -> statue = $statue;
            $this -> listemploye = $listemploye;
        }

        public function getListeEmploye(){return $this->listemploye;}
        public function getstatue(){return $this->statue;}

        public function setListeEmploye($listemploye){$this->listemploye = $listemploye;return $this;}
        public function setstatue($statue){$this->statue = $statue;return $this;}

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

        function manage(){
        $phrase = "Le manager manage: ";
        foreach ($this->getListeEmploye() as $employe) {
            $phrase = $phrase . $employe . ", ";
        }
        return $phrase. "<br/>";
    }

        public function CalculSalaire(Employe $employe,$pourcentage){
            $salaire1 = $employe->getsalaire() + ($employe->getsalaire() * $pourcentage). "<br/>";
            return $salaire1;
        }

}