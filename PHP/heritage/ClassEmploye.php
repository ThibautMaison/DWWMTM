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
        
        
        public function Presentation()
        {
            echo "<b>Nom: " . $this->nom . "<br/>";
            echo "<b>Prénom: " . $this->prenom . "<br/>";
            echo "<b>Numero de sécurité social: " . $this->numSecu . "<br/>";
            echo "<b>salaire: " . $this->salaire  . "<br/>";
            echo "<b>job: " . $this->job . "<br/>";
        }

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
        


$employe1 = new Employe ("jean","neymar",1850389546458,1500.56,"soudeur");
$employe2 = new Employe ("Simon","Jeremy",179028955812,1700.47,"assistant mécanicien");
$employe3 = new Employe ("Odile","Deray ",285097154678,1900.14,"magasinière");
?>