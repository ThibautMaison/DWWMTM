<?php
require_once "Model.class.php";
require_once "film.class.php";

class filmManager extends Model{
    private $location;
    private $Users; 

    public function ajoutlocation($film){
        $this->location[]=$film;
    }

    public function ajoutUsers($User){
        $this->Users[]=$User;
    }

    public function getlocation(){return $this->location;}

    public function chargementlocation(){
        $req=$this->getBdd()->prepare("SELECT * FROM location");
        $req->execute();
        $meslocation=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        foreach($meslocation as $film){
            $l=new film($film["id"],$film["Name"],$film["Description"],$film["Prix"],$film["Lien"],$film["image"],$film["idCategorie"]);
            $this->ajoutlocation($l);
        }
    }

    public function chargerlocationParCategorie($idCategorie){
        $requete = "SELECT * FROM location WHERE idCategorie = :idCategorie";
        $req = $this->getBdd()->prepare($requete);
        $req->execute(array(
            'idCategorie' => $idCategorie
        ));
        $meslocation = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($meslocation as $location) {
            $l = new film($location["id"], $location["Name"], $location["Description"], $location["Prix"], $location["Lien"], $location["image"], $location["idCategorie"]);
            $this->ajoutlocation($l);
        }
    }

    public function getfilmById($id){
        for($i=0;$i<count($this->location);$i++){
            if($this->location[$i]->getId() === $id){
                return $this->location[$i];
            }
        }
    }

    public function ajoutfilmBd($Name,$Description,$Prix,$Lien,$image,$idCategorie){
        $req="
        INSERT INTO location (Name,Description,Prix,Lien,image,idCategorie)
        value (:Name,:Description,:Prix,:Lien,:image,:idCategorie)";

        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":Name",$Name,PDO::PARAM_STR);
        $stmt->bindValue(":Description",$Description,PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$Prix,PDO::PARAM_STR);
        $stmt->bindValue(":Lien",$Lien,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $stmt->bindValue(":idCategorie",$idCategorie,PDO::PARAM_INT);
        $resultat=$stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $film=new film($this->getBdd()->lastInsertId(),$Name,$Description,$Prix,$Lien,$image,$idCategorie);
            $this->ajoutlocation($film);
        }
    }

    public function suppressionfilmBd($id){
        $req="
        DELETE from location where id= :idfilm";
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":idfilm",$id,PDO::PARAM_INT);
        $resultat=$stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $film=$this->getfilmById($id);
            unset($film);
        }
    }

    public function modificationfilmBd($id,$Name,$Description,$Prix,$Lien,$image,$idCategorie){
        $req = "
        UPDATE location
        SET Name= :Name,Description= :Description,Prix= :Prix,Lien= :Lien,image= :image,idCategorie= :idCategorie
        WHERE id= :id";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":Name", $Name, PDO::PARAM_STR);
        $stmt->bindValue(":Description", $Description, PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$Prix,PDO::PARAM_STR);
        $stmt->bindValue(":Lien",$Lien,PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":idCategorie", $idCategorie, PDO::PARAM_INT);
        $resultat=$stmt->execute();
        $stmt->closeCursor();
    }
}
