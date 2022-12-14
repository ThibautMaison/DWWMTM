<?php
class ChainePlus
{
  // Déclaration de la propriété privée 'chaine'
  private $chaine;

  // Constructeur de la classe qui prend en paramètre la chaîne à manipuler
  public function __construct($chaine)
  {
    $this->chaine = $chaine;
  }

  public function getchaine(){return $this->chaine;}    
  public function setchaine($chaine){$this->chaine = $chaine;}

  // Méthode pour mettre en gras la chaîne
  public function gras()
  {
    return " Gras " . "<strong>{$this->chaine}</strong>";
  }

  // Méthode pour mettre en italique la chaîne
  public function italique()
  {
    return " Italique " . "<em>{$this->chaine}</em>";
  }

  // Méthode pour souligner la chaîne
  public function souligne()
  {
    return " Souligné " . "<u>{$this->chaine}</u>";
  }

  // Méthode pour mettre en majuscules la chaîne
  public function majuscules()
  {
    return  "Majuscules " . strtoupper($this->chaine);
  }
}