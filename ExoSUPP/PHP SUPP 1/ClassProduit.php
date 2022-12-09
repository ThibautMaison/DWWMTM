<?php 

class Produit {
    private $libelle ;
    private $description ;
    private $reference ;
    private $prixUnitaireTTC ;

    
    public function __construct($libelle,$description,$reference,$prixUnitaireTTC){
        $this -> libelle = $libelle;
        $this -> description = $description;
        $this -> reference = $reference; 
        $this -> prixUnitaireTTC = $prixUnitaireTTC;
        }


        public function getlibelle(){return $this->libelle;}
        public function getdescription(){return $this->description;}
        public function getreference(){return $this->reference;}
        public function getprixUnitaireTTC(){return $this->prixUnitaireTTC;}


        public function setlibelle($libelle){$this->libelle = $libelle;return $this;}
        public function setdescription($description){$this->description = $description;return $this;}
        public function setreference($reference){$this->reference = $reference;return $this;}
        public function setprixUnitaireTTC($prixUnitaireTTC){$this->prixUnitaireTTC = $prixUnitaireTTC;return $this;}
    
        public function AfficherSesinfos(){
        
        }
    }
?>