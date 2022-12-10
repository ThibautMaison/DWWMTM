<?php
class Rectangle{
  // Attributs de la classe
  protected $longueur;
  protected $largeur;

  // Constructeur
  public function __construct($longueur, $largeur){
    $this->longueur = $longueur;
    $this->largeur = $largeur;
  }

  // Méthodes d'accès aux attributs de la classe (Assesseurs)
  public function getLongueur(){return $this->longueur;}
  public function getLargeur(){return $this->largeur;}

  public function setLongueur($longueur){$this->longueur = $longueur;}
  public function setLargeur($largeur){$this->largeur = $largeur;}

  // Méthode calculant le périmètre du rectangle
  public function perimetre(){
    return 2 * ($this->longueur + $this->largeur);
  }

  // Méthode calculant l'aire du rectangle
  public function aire(){
    return $this->longueur * $this->largeur;
  }

  // Méthode vérifiant si le rectangle est un carré
  public function estCarre(){
    return $this->longueur == $this->largeur;
  }

  // Méthode affichant les caractéristiques du rectangle
  public function afficherRectangle(){
    // Déterminer si le rectangle est un carré ou non
    $carre = $this->estCarre() ? "un carré" : "pas un carré";

    // Afficher les informations sur le rectangle
    echo "Longueur : " . $this->longueur . " - Largeur : " . $this->largeur . " - Périmètre : " . $this->perimetre() . " - Aire : " . $this->aire() . " - Il s'agit d' " . $carre;
  }
}

class Triangle
{
    // Attributs de la classe
    protected $base;
    protected $hauteur;

    // Constructeur
    public function __construct($base, $hauteur){
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    // Assesseurs pour les attributs de la classe
    public function getBase(){return $this->base;}
    public function getHauteur(){return $this->hauteur;}
    
    public function setBase($base){$this->base = $base;}
    public function setHauteur($hauteur){$this->hauteur = $hauteur;}

    // Méthodes de la classe
    public function perimetre(){
        // Le périmètre d'un triangle est égal à la somme de ses côtés
        $AC = hypot($this->base, $this->hauteur);
        return $this->base + $this->hauteur + $AC;
    }

    public function aire(){
        // L'aire d'un triangle est égale à (base x hauteur) / 2
        return ($this->base * $this->hauteur) / 2;
    }

    public function afficherTriangle(){
        return "Base : " . $this->base . " - Hauteur : " . $this->hauteur . " - Périmètre : " . $this->perimetre() . " - Aire : " . $this->aire();
    }
}

class Cercle {
  // Attributs
  protected $diametre;
  
  // Constructeur d'initialisation simple
  public function __construct($diametre) {
    $this->diametre = $diametre;
  }
   
  // Assesseurs
  public function getDiametre() {
    return $this->diametre;
  }
  
  public function setDiametre($diametre) {
    $this->diametre = $diametre;
  }
  
  // Méthodes
  public function perimetre() {
    return $this->diametre * pi();
  }
  
  public function aire() {
    return pow($this->diametre / 2, 2) * pi();
  }

  public function volume() {
      return 4 / 3 * pow($this->diametre / 2, 3) * pi();
    }
  
  public function afficherCercle() {
    echo "Diamètre : " . $this->diametre . " - Périmètre : " . $this->perimetre() . " - Aire : " . $this->aire() . " - Volume : " . $this->volume();
  }
}

class Pave extends Rectangle
{
  // Attribut de la classe
  private $hauteur;

  // Constructeur
  public function __construct($longueur, $largeur, $hauteur)
  {
    // Appeler le constructeur de la classe parente (Rectangle)
    parent::__construct($longueur, $largeur);

    $this->hauteur = $hauteur;
  }

  // Méthode d'accès à l'attribut hauteur (Assesseur)
  public function getHauteur(){return $this->hauteur;}

  public function setHauteur($hauteur){$this->hauteur = $hauteur;}

  // Méthode calculant le périmètre du parallélépipède
  public function perimetre(){
    return 4 * parent::perimetre(); // Utiliser la méthode perimetre() de la classe parente
  }

  // Méthode calculant le volume du parallélépipède
  public function volume(){
    return $this->hauteur * parent::aire(); // Utiliser la méthode aire() de la classe parente
  }

  // Méthode affichant les caractéristiques du parallélépipède
  public function afficher(){
    // Afficher les informations sur le parallélépipède
    echo "Périmètre : " . $this->perimetre() . " - Volume : " . $this->volume();
  }
}

class Pyramide extends Triangle {
  // Définition de l'attribut supplémentaire "hauteurPyramide"
  private $hauteurPyramide;

  // Constructeur avec des valeurs par défaut
  public function __construct($base, $hauteur , $hauteurPyramide) {
    parent::__construct($base, $hauteur); // Appel du constructeur de la classe parente (Triangle)
    $this->hauteurPyramide = $hauteurPyramide;
  }

  // Méthodes d'accès aux attributs (assesseurs)
  public function getHauteurPyramide() {return $this->hauteurPyramide;}

  public function setHauteurPyramide($hauteurPyramide) {$this->hauteurPyramide = $hauteurPyramide;}

  // Méthode pour calculer le volume de la pyramide
  public function volume() {
    return ($this->base * $this->hauteur * $this->hauteurPyramide) / 3; // Le volume d'une pyramide est égal à (base x hauteur x hauteurPyramide) / 3
  }

  // Méthode pour afficher les caractéristiques de la pyramide
  public function afficher() {
    echo "Périmètre : " . $this->perimetre() . " Volume : " . $this->volume();
  }
}
?>

