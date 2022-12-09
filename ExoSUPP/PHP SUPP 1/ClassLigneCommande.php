<?php

class LigneCommande {
    private $nom ;
    private $prenom ;
    private $numClient ;


    
    public function __construct($nom,$prenom,$numClient){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> numClient = $numClient; 
        }


        public function getnom(){return $this->nom;}
        public function getprenom(){return $this->prenom;}
        public function getnumClient(){return $this->numClient;}


        public function setnom($nom){$this->nom = $nom;return $this;}
        public function setprenom($prenom){$this->prenom = $prenom;return $this;}
        public function setnumClient($numClient){$this->numClient = $numClient;return $this;}
    
        public function calculTotalLigneTTC(){
        }
        public function Affichage(){
        }
    }
?>