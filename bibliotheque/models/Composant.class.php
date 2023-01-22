<?php
class Composant{
    private $id;
    private $Name;
    private $Description;
    private $Lien;
    private $image;

    public function __construct($id,$Name,$Description,$Lien,$image)
    {
        $this->id=$id;
        $this->Name=$Name;
        $this->Description=$Description;
        $this->Lien=$Lien;
        $this->image=$image;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}

    public function getName(){return $this->Name;}
    public function setName($Name){$this->Name=$Name;}

    public function getDescription(){return $this->Description;}
    public function setDescription($Description){$this->Description=$Description;}

    public function getLien(){return $this->Lien;}
    public function setLien($Lien){$this->Lien=$Lien;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image=$image;}
}

?>