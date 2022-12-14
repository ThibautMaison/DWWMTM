<?php
 class Ville implements IFormatage2{
    private $nom;
    private $Cp;

    public function __construct($nom,$Cp)
    {
        $this->nom = $this->formatageNom($nom);
        $this->Cp = $this->formatageCp($Cp);
    }
    public function getNom(){return $this->nom;}
    public function getCp(){return $this->Cp;}

    public function setNom($nom){$this->nom = $nom;}
    public function setCp($Cp){$this->Cp = $Cp;}

    public function formatageNom($nom)
    {
     return strtoupper($nom);
    }

    public function formatageCp($cp)
    {
        return number_format($cp,2,","," ");
    }

}