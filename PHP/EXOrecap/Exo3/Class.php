<?php 
// Classe abstraite Personne
abstract class Personne
{
    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

// Classe Client dérivée de la classe abstraite Personne
class Client extends Personne
{
    protected $adresse;

    public function __construct($nom, $prenom, $adresse)
    {
        // Appeler le constructeur de la classe parente
        parent::__construct($nom, $prenom);

        // Initialiser la propriété adresse
        $this->adresse = $adresse;
    }

    public function setCoord()
    {
        echo "Coordonnées complètes : $this->prenom $this->nom, $this->adresse";
    }
}

// Classe Electeur dérivée de la classe abstraite Personne
class Electeur extends Personne
{
    protected $bureauDeVote;
    protected $vote;

    public function __construct($nom, $prenom, $bureauDeVote,$Vote)
    {
        // Appeler le constructeur de la classe parente
        parent::__construct($nom, $prenom);

        // Initialiser la propriété bureauDeVote
        $this->bureauDeVote = $bureauDeVote;
        $this->Vote = $Vote;
    }

    public function avoter()
    {
        echo "la personne $this->prenom $this->nom, $this->bureauDeVote, $this->Vote";
    }
}
