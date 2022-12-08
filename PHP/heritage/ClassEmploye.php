<?php 

class Employe {
    protected $nom ;
    protected $prenom ;
    protected $numSecu ;
    protected $salaire ;
    protected $job ;

    
    public function __construct($nom,$prenom,$numSecu,$salaire,$job){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> numSecu = $numSecu; 
        $this -> salaire = $salaire;
        $this -> job = $job;
        }


        public function getnom(){return $this->nom;}
        public function getprenom(){return $this->prenom;}
        public function getnumSecu(){return $this->numSecu;}
        public function getsalaire(){return $this->salaire;}
        public function getjob(){return $this->job;}


        public function setnom($nom){$this->nom = $nom;return $this;}
        public function setprenom($prenom){$this->prenom = $prenom;return $this;}
        public function setnumSecu($numSecu){$this->numSecu = $numSecu;return $this;}
        public function setsalaire($salaire){$this->salaire = $salaire;return $this;}
        public function setjob($job){$this->job = $job;return $this;}
        
         // Fonction pour presenter chaque employé sans son statue
        public function Presentation()
        {
            echo "<b>Nom: " . $this->nom . "<br/>";
            echo "<b>Prénom: " . $this->prenom . "<br/>";
            echo "<b>Numero de sécurité social: " . $this->numSecu . "<br/>";
            echo "<b>salaire: " . $this->salaire  . "<br/>";
            echo "<b>job: " . $this->job . "<br/>";
        }

        // Fonction pour presenter une phrase pour chaque metier specifique
        public function PresentationJob(){
                if($this->job == "soudeur"){
                    echo "bonsoir je suis soudeur". "<br/>";;
                }if($this->job == "assistant mécanicien"){
                    echo "bonsoir je suis assistant mécanicien". "<br/>";;
                }if($this->job == "magasinière"){
                    echo "bonsoir je suis magasinière". "<br/>";;
                }if($this->job == "chef maintenance"){
                    echo "bonsoir je suis chef maintenance". "<br/>";;
                }echo "------------------------------------------------------------". "<br/>";
            }
        }    
?>