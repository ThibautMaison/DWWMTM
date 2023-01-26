<?php
require_once "Model.class.php";
require_once "Composant.class.php";

// Permet de mettre tous les Boutique dans le même tableau
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

    // Va permettre de recup Boutique bdd
    public function chargementBoutique(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM Boutique ");
        // on execute req
        $req->execute();
        // permet deviter des doublons
        $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();


        foreach($mesBoutique as $Composant){
            // genere Composant de la classe Composant
            $l=new Composant($Composant["id"],$Composant["Name"],$Composant["Description"],$Composant["Prix"],$Composant["Lien"],$Composant["image"],$Composant["idCategorie"]);
            $this->ajoutBoutique($l);
        }
    }
        // Va permettre de recup Boutique bdd
        public function chargementBoutiqueOrdinateur(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '1' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Ordinateur){
                // genere Composant de la classe Composant
                $l=new Composant($Ordinateur["id"],$Ordinateur["Name"],$Ordinateur["Description"],$Ordinateur["Prix"],$Ordinateur["Lien"],$Ordinateur["image"],$Ordinateur["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueEcran(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '2' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Ecran){
                // genere Composant de la classe Composant
                $l=new Composant($Ecran["id"],$Ecran["Name"],$Ecran["Description"],$Ecran["Prix"],$Ecran["Lien"],$Ecran["image"],$Ecran["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueClavier(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '3' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Clavier){
                // genere Composant de la classe Composant
                $l=new Composant($Clavier["id"],$Clavier["Name"],$Clavier["Description"],$Clavier["Prix"],$Clavier["Lien"],$Clavier["image"],$Clavier["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueSouris(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '4' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Souris){
                // genere Composant de la classe Composant
                $l=new Composant($Souris["id"],$Souris["Name"],$Souris["Description"],$Souris["Prix"],$Souris["Lien"],$Souris["image"],$Souris["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueCasque(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '5' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Casque){
                // genere Composant de la classe Composant
                $l=new Composant($Casque["id"],$Casque["Name"],$Casque["Description"],$Casque["Prix"],$Casque["Lien"],$Casque["image"],$Casque["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueTapisdesouris(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '6' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Tapisdesouris){
                // genere Composant de la classe Composant
                $l=new Composant($Tapisdesouris["id"],$Tapisdesouris["Name"],$Tapisdesouris["Description"],$Tapisdesouris["Prix"],$Tapisdesouris["Lien"],$Tapisdesouris["image"],$Tapisdesouris["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueChaise(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '7' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Chaise){
                // genere Composant de la classe Composant
                $l=new Composant($Chaise["id"],$Chaise["Name"],$Chaise["Description"],$Chaise["Prix"],$Chaise["Lien"],$Chaise["image"],$Chaise["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueAccessoire(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where idCategorie = '9' ");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Accessoire){
                // genere Composant de la classe Composant
                $l=new Composant($Accessoire["id"],$Accessoire["Name"],$Accessoire["Description"],$Accessoire["Prix"],$Accessoire["Lien"],$Accessoire["image"],$Accessoire["idCategorie"]);
                $this->ajoutBoutique($l);
            }
    
        }

        public function chargementBoutiqueStuffperso(){
            // appelle connexion à la bdd
            $req=$this->getBdd()->prepare("SELECT * FROM Boutique where Name IN ('BENQ XL2566K' , 'GSR-SE RED' , 'HYPERX ALPHA' , 'X2 MINI' , 'ZOWIE CAMADE' , 'PC GAMING')");
            // on execute req
            $req->execute();
            // permet deviter des doublons
            $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();
    
    
            foreach($mesBoutique as $Stuffperso){
                // genere Composant de la classe Composant
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
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":Name",$Name,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":Description",$Description,PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$Prix,PDO::PARAM_STR);
        $stmt->bindValue(":Lien",$Lien,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        $stmt->bindValue(":idCategorie",$idCategorie,PDO::PARAM_INT);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le Composant a la classe Composant
            $Composant=new Composant($this->getBdd()->lastInsertId(),$Name,$Description,$Prix,$Lien,$image,$idCategorie);
            // ajoute Composant au tableau de Composant
            $this->ajoutBoutique($Composant);
        }
    }

    public function suppressionComposantBd($id){
        //  il est interdit de faire une concatenation avec $id, pour la securité
        $req="
        DELETE from boutique where id= :idComposant";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":idComposant",$id,PDO::PARAM_INT);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on supprime le Composant au tableau de Composant
            $Composant=$this->getComposantById($id);
            unset($Composant);
        }
    }

    public function modificationComposantBd($id,$Name,$Description,$Prix,$Lien,$image,$idCategorie){
        $req = "
        UPDATE boutique
        SET Name= :Name,Description= :Description,Prix= :Prix,Lien= :Lien,image= :image,idCategorie= :idCategorie
        WHERE id= :id";

        // connexion à bd
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":Name", $Name, PDO::PARAM_STR);
        $stmt->bindValue(":Description", $Description, PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$Prix,PDO::PARAM_STR);
        $stmt->bindValue(":Lien",$Lien,PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":idCategorie", $idCategorie, PDO::PARAM_INT);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // mettre a jour le tableau des Boutique
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