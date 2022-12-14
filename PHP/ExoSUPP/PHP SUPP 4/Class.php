<?php
require "Classinterface.php";
abstract class Animal implements Deplacer {
    protected $couleur;
    protected $nb_pattes;
  
    public function __construct($couleur, $nb_pattes) {
      $this->couleur = $couleur;
      $this->nb_pattes = $nb_pattes;
    }

    public function getCouleur() {return $this->couleur;}
    public function getnb_pattes() {return $this->nb_pattes;}

    public function setCouleur($Couleur){$this->Couleur = $Couleur;}
    public function setnb_pattes($nb_pattes){$this->nb_pattes = $nb_pattes;}
  
  
    public function crier() {
      // code pour faire crier l'animal
    }

  }
  
  class Lapin extends Animal {
    private $En_vie;
  
    public function __construct($couleur, $nb_pattes,$En_vie) {
      parent::__construct($couleur, $nb_pattes);
      $this->En_vie = $En_vie;
    }

    public function getEn_vie() {return $this->En_vie;}
    public function setEn_vie($En_vie){$this->En_vie = $En_vie;}

  
    public function seNourrir() {
      return " le lapin de couleur " . $this->couleur . " se nourrit " . "\n";
    }
  
    public function crier() {
      return " le lapin glapie de peur " . "\n";
    }
  
    public function fuir() {
      return " Le lapin " . $this->couleur . " s'enfuie sur ses " . $this->nb_pattes . " pattes d'un seul bond ! " . "\n";
    }
  
    public function seDeplacer() {
      return 'il se deplace' . "\n";
    }
  }

  // Classe humain
  abstract class Humain implements Deplacer {
    // Attribut nom
    protected $nom;
    
    // Constructeur pour initialiser l'attribut nom
    public function __construct($nom) {
      $this->nom = $nom;
    }

    public function getnom() {return $this->nom;}
    public function setnom($nom){$this->nom = $nom;}
  
  }
  
  // Classe chasseur
  class Chasseur extends Humain {
    // Attribut arme
    private $arme;
  
    // Constructeur pour initialiser les attributs nom et arme
    public function __construct($nom, $arme) {
      // Appeler le constructeur de la classe parente pour initialiser l'attribut nom
      parent::__construct($nom);
  
      // Initialiser l'attribut arme
      $this->arme = $arme;
    }

    public function getarme() {return $this->arme;}
    public function setarme($arme){$this->arme = $arme;}
  
    // Méthode chasser
    public function chasser() {
      $this->nom . " tire sur le lapin avec son ". $this->arme ." est… le rate ";
    }
  
    // Méthode seDeplacer
    public function seDeplacer() {
      return $this->nom . " avance avec son " . $this->arme . "\n";
    }
  }