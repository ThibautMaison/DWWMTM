<?php
abstract class Animal {
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
  
    public function seDeplacer() {
      // code pour faire se déplacer l'animal
    }
  }
  
  class Lapin extends Animal {
    private $en_vie;
  
    public function __construct($couleur, $en_vie) {
      parent::__construct($couleur, 4);
      $this->en_vie = $en_vie;
    }

    public function getEn_vie() {return $this->En_vie;}
    public function setEn_vie($En_vie){$this->En_vie = $En_vie;}

  
    public function seNourrir() {
      // code pour faire se nourrir le lapin
    }
  
    public function crier() {
      // code pour faire crier le lapin (différent de la méthode crier de la classe parente)
    }
  
    public function fuir() {
      // code pour faire fuir le lapin
    }
  
    public function seDeplacer() {
      // code pour faire se déplacer le lapin (différent de la méthode seDeplacer de la classe parente)
    }
  }

  // Classe humain
  abstract class Humain {
    // Attribut nom
    protected $nom;
    
    // Constructeur pour initialiser l'attribut nom
    public function __construct($nom) {
      $this->nom = $nom;
    }

    public function getnom() {return $this->nom;}
    public function setnom($nom){$this->nom = $nom;}
  
    // Méthode seDeplacer
    public function seDeplacer() {
      // Code pour se déplacer
    }


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
      // Code pour chasser
    }
  
    // Méthode seDeplacer
    public function seDeplacer() {
      // Code pour se déplacer (peut-être différent de celui de la classe parente)
    }
  }