<?php
require_once "Model.class.php";
require_once "Composant.class.php";

class ComposantManager extends Model{
    private $Boutique;
    private $Users; 

    public function ajoutBoutique($Composant){
        $this->Boutique[]=$Composant;
    }

    public function ajoutUsers($User){
        $this->Users[]=$User;
    }

    public function getBoutique(){return $this->Boutique;}

    public function chargementBoutique(){
        $req=$this->getBdd()->prepare("SELECT * FROM Boutique ");
        $req->execute();
        $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();


        foreach($mesBoutique as $Composant){
            $l=new Composant($Composant["id"],$Composant["Name"],$Composant["Description"],$Composant["Prix"],$Composant["Lien"],$Composant["image"],$Composant["idCategorie"]);
            $this->ajoutBoutique($l);
        }
    }
        public function chargementBoutiqueOrdinateur(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '1' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Ordinateur){
                $l=new Composant($Ordinateur["id"],$Ordinateur["Name"],$Ordinateur["Description"],$Ordinateur["Prix"],$Ordinateur["Lien"],$Ordinateur["image"],$Ordinateur["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueEcran(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '2' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Ecran){
                $l=new Composant($Ecran["id"],$Ecran["Name"],$Ecran["Description"],$Ecran["Prix"],$Ecran["Lien"],$Ecran["image"],$Ecran["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueClavier(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '3' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Clavier){
                $l=new Composant($Clavier["id"],$Clavier["Name"],$Clavier["Description"],$Clavier["Prix"],$Clavier["Lien"],$Clavier["image"],$Clavier["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueSouris(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '4' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Souris){
                $l=new Composant($Souris["id"],$Souris["Name"],$Souris["Description"],$Souris["Prix"],$Souris["Lien"],$Souris["image"],$Souris["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueCasque(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '5' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Casque){
                $l=new Composant($Casque["id"],$Casque["Name"],$Casque["Description"],$Casque["Prix"],$Casque["Lien"],$Casque["image"],$Casque["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueTapisdesouris(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '6' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Tapisdesouris){
                $l=new Composant($Tapisdesouris["id"],$Tapisdesouris["Name"],$Tapisdesouris["Description"],$Tapisdesouris["Prix"],$Tapisdesouris["Lien"],$Tapisdesouris["image"],$Tapisdesouris["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueChaise(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '7' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Chaise){
                $l=new Composant($Chaise["id"],$Chaise["Name"],$Chaise["Description"],$Chaise["Prix"],$Chaise["Lien"],$Chaise["image"],$Chaise["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueAccessoire(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '9' ");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Accessoire){
                $l=new Composant($Accessoire["id"],$Accessoire["Name"],$Accessoire["Description"],$Accessoire["Prix"],$Accessoire["Lien"],$Accessoire["image"],$Accessoire["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueStuffperso(){
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where Name IN ('BENQ XL2566K' , 'GSR-SE RED' , 'HYPERX ALPHA' , 'X2 MINI' , 'ZOWIE CAMADE' , 'PC GAMING')");
            $req->execute();
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Stuffperso){
                $l=new Composant($Stuffperso["id"],$Stuffperso["Name"],$Stuffperso["Description"],$Stuffperso["Prix"],$Stuffperso["Lien"],$Stuffperso["image"],$Stuffperso["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

    public function getComposantById($id){
        for($i=0;$i<count($this->Boutique);$i++){
            if($this->Boutique[$i]->getId() === $id){
                return $this->Boutique[$i];
            }
        }
    }

    public function ajoutComposantBd($Name,$Description,$Prix,$Lien,$image,$idCategorie){
        $req="
        INSERT INTO Boutique (Name,Description,Prix,Lien,image,idCategorie)
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
            $Composant=new Composant($this->getBdd()->lastInsertId(),$Name,$Description,$Prix,$Lien,$image,$idCategorie);
            $this->ajoutBoutique($Composant);
        }
    }

    public function suppressionComposantBd($id){
        $req="
        DELETE from boutique where id= :idComposant";
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":idComposant",$id,PDO::PARAM_INT);
        $resultat=$stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $Composant=$this->getComposantById($id);
            unset($Composant);
        }
    }

    public function modificationComposantBd($id,$Name,$Description,$Prix,$Lien,$image,$idCategorie){
        $req = "
        UPDATE boutique
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

        if($resultat>0){
            $this->getComposantById($id)->setName($Name);
            $this->getComposantById($id)->setDescription($Description);
            $this->getComposantById($id)->setPrix($Prix);
            $this->getComposantById($id)->setLien($Lien);
            $this->getComposantById($id)->setImage($image);
            $this->getComposantById($id)->setidCategorie($idCategorie);
        }
    }
}
?>