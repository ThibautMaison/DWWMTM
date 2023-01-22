<?php
require_once "Model.class.php";
require_once "Composant.class.php";

// Permet de mettre tous les Boutique dans le même tableau
class ComposantManager extends Model{
    private $Boutique;
    private $Users; //tableau de Composant

    public function ajoutBoutique($Composant){
        $this->Boutique[]=$Composant;
    }

    public function ajoutUsers($User){
        $this->Users[]=$User;
    }

    public function getBoutique(){return $this->Boutique;}
    public function getUsers(){return $this->Users;}

    // Va permettre de recup Boutique bdd
    public function chargementBoutique(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM Boutique");
        // on execute req
        $req->execute();
        // permet deviter des doublons
        $mesBoutique=$req->fetchAll(PDO::FETCH_ASSOC);

        // // Pour verifier
        // echo "<pre>";
        // print_r($Boutique);
        // echo "</pre>";
        // ferme requete
        $req->closeCursor();


        foreach($mesBoutique as $Composant){
            // genere Composant de la classe Composant
            $l=new Composant($Composant["id"],$Composant["Name"],$Composant["Categorie"],$Composant["Lien"],$Composant["image"]);
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

    public function ajoutComposantBd($Name,$Categorie,$Lien,$image){
        $req="
        INSERT INTO Boutique (Name,Categorie,Lien,image)
        value (:Name,:Categorie,:Lien,:image)";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":Name",$Name,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":Categorie",$Categorie,PDO::PARAM_STR);
        $stmt->bindValue(":Lien",$Lien,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le Composant a la classe Composant
            $Composant=new Composant($this->getBdd()->lastInsertId(),$Name,$Categorie,$Lien,$image);
            // ajoute Composant au tableau de Composant
            $this->ajoutBoutique($Composant);
        }
    }

    public function suppressionComposantBd($id){
        //  il est interdit de faire une concatenation avec $id, pour la securité
        $req="
        DELETE from Boutique where id= :idComposant";
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

    public function modificationComposantBd($id,$Name,$Categorie,$Lien,$image){
        $req = "
        UPDATE Boutique
        SET Name= :Name,Categorie= :Categorie,Lien= :Lien,image= :image
        WHERE id= :id";

        // connexion à bd
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":Name", $Name, PDO::PARAM_STR);
        $stmt->bindValue(":Categorie", $Categorie, PDO::PARAM_STR);
        $stmt->bindValue(":Lien",$Lien,PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // mettre a jour le tableau des Boutique
            $this->getComposantById($id)->setName($Name);
            $this->getComposantById($id)->setCategorie($Categorie);
            $this->getComposantById($id)->setLien($Lien);
            $this->getComposantById($id)->setImage($image);
        }
    }
}
?>