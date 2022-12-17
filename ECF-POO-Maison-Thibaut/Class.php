<?php
// Classe abstraite représentant un personnage
abstract class Character
{
    // Propriété représentant les points de vie du personnage
    protected $lifePoint;

    // Propriété représentant les points de force du personnage
    protected $strenghtPoint;

    // Constructeur de la classe, prenant en paramètres les points de vie et de force du personnage
    public function __construct($lifePoint, $strenghtPoint)
    {
        // Affectation des propriétés de la classe avec les valeurs passées en paramètres
        $this->lifePoint = $lifePoint;
        $this->strenghtPoint = $strenghtPoint;
    }

    // Méthode permettant de récupérer les points de vie du personnage
    public function getLifePoint(){return $this->lifePoint;}

    // Méthode permettant de récupérer les points de force du personnage
    public function getStrenghtPoint(){return $this->StrenghtPoint;}

    // Méthode permettant de définir les points de vie du personnage
    public function setLifePoint($lifePoint){$this->lifePoint = $lifePoint;return $this;}

    // Méthode permettant de définir les points de force du personnage
    public function setStrenghtPoint($StrenghtPoint){$this->StrenghtPoint = $StrenghtPoint;return $this;}

    // Méthode permettant au personnage d'attaquer
    public function attack(){
        // Affichage du message indiquant que le personnage inflige des dégâts
        echo 'le ' . get_class($this) . ' inflige ' . $this->strenghtPoint . "\n";
        // Renvoi des dégâts infligés par le personnage
        return $this->strenghtPoint;
    }
}

// Classe représentant un joueur héritant de la classe Character
class Player extends Character
{
    // Score du joueur
    private $score;
    // Pseudonyme du joueur
    private $pseudo;

    // Constructeur de la classe Player
    public function __construct($pseudo, $lifePoints = 100, $strenghtPoints = 20, $score = 0)
    {
        parent::__construct($lifePoints, $strenghtPoints);
        $this->score = $score;
        $this->pseudo = $pseudo;
    }

    // Getter pour le score du joueur
    public function getScore(){return $this->score;}
    // Getter pour le pseudonyme du joueur
    public function getPseudo(){return $this->pseudo;}
    // Setter pour le pseudonyme du joueur
    public function setPseudo($pseudo){$this->pseudo = $pseudo;return $this;}
    // Setter pour le score du joueur
    public function setScore($score){$this->score = $score;return $this;}

    // Fonction permettant au joueur de se déplacer dans une direction choisie
    public function move(){
        // Affichage du menu de déplacement
        $menu = readline(" \nPressez 1 pour aller vers le nord \n 2 pour aller vers le Sud \n 3 pour aller vers l'Est \n 4 pour aller vers l'Ouest \n Pressez 0 pour quitter\n");
        // Selon la valeur choisie, affichage de la direction choisie
        switch ($menu) {
            case 1:
                echo "Vous allez vers le Nord\n\n";
                break;
            case 2:
                echo "Vous allez vers le Sud\n\n";
                break;
            case 3:
                echo "Vous allez vers le Est\n\n";
                break;
            case 4:
                echo "Vous allez vers le Ouest\n\n";
                break;
            case 0:
                echo "Vous quittez le jeu\n\n";
                break;
        }
        // Retourne la valeur choisie par le joueur
        return $menu;
    }

    // Fonction permettant de transformer l'objet Player en chaîne de caractères
    public function __toString(){
        return "Player";
    }
}


// Classe représentant un monstre héritant de la classe Character
class Monster extends Character
{
    // Nombre de points gagnés en combattant le monstre
    private $points;

    // Constructeur de la classe Monster
    public function __construct(){
        parent::__construct(rand(20, 100), rand(5, 10));
        $this->points = $this->getLifePoint() < 60 ? 1 : 2;
    }

    // Getter pour le nombre de points gagnés
    public function getPoints(){return $this->points;}
    // Setter pour le nombre de points gagnés
    public function setPoints($Points){$this->Points = $Points;return $this;}

    // Fonction permettant de transformer l'objet Monster en chaîne de caractères
    public function __toString(){
        return "Monster";
    }
}

// Classe représentant un bandit manchot
class BanditManchot
{
    // Constructeur de la classe BanditManchot
    public function __construct(){
    }
    // Fonction qui renvoie un nombre aléatoire 0 ou 1 pour représenter une victoire ou une défaite
    public function winOrLose(){
        return rand(0, 1);
    }
    // Fonction qui renvoie un nombre aléatoire entre 1 et 10 pour représenter le nombre de points gagnés ou perdus
    public function howManyWeWinOrLose(){
        return rand(1, 10);
    }
    // Fonction permettant de transformer l'objet BanditManchot en chaîne de caractères
    public function __toString(){
        return "Bandit Manchot";
    }
}