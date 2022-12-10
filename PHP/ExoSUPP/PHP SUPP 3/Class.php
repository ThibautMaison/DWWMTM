<?php 
class Voiture {
    // Attributs de la classe
    private $couleur;
    private $marque;
    private $modele;
    private $nb_kilometres;
    private $motorisation;
  
    // Constructeur de la classe
    public function __construct($couleur, $marque, $modele, $nb_kilometres, $motorisation) {
      $this->couleur = $couleur;
      $this->marque = $marque;
      $this->modele = $modele;
      $this->nb_kilometres = $nb_kilometres;
      $this->motorisation = $motorisation;
    }
  
    // Accesseurs (getters) pour chaque attribut
    public function getCouleur() {return $this->couleur;}
    public function getMarque() {return $this->marque;}
    public function getModele() {return $this->modele;}
    public function getNbKilometres() {return $this->nb_kilometres;}
    public function getMotorisation() {return $this->motorisation;}
  
    // Méthode pour afficher la description de la voiture
    public function afficherDescription() {
      return "Cette voiture est un modèle de la marque " . $this->getMarque() . ", de couleur " . $this->getCouleur() . ", de motorisation " . $this->getMotorisation() . ", avec " . $this->getNbKilometres() . " km";
    }
  
    // Méthode pour rouler avec la voiture
    public function rouler($nb_kilometres) {
      $this->nb_kilometres += $nb_kilometres;
    }
  }

?>