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
            $l=new Composant($Composant["id"],$Composant["Name"],$Composant["Description"],$Composant["image"]);
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

    public function ajoutComposantBd($Name,$Description,$image){
        $req="
        INSERT INTO Boutique (Name,Description,image)
        value (:Name,:Description,:image)";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":Name",$Name,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":Description",$Description,PDO::PARAM_STR);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le Composant a la classe Composant
            $Composant=new Composant($this->getBdd()->lastInsertId(),$Name,$Description,$image);
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

    public function modificationComposantBd($id,$Name,$Description,$image){
        $req = "
        UPDATE Boutique
        SET Name= :Name,Description= :Description,image= :image
        WHERE id= :id";

        // connexion à bd
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":Name", $Name, PDO::PARAM_STR);
        $stmt->bindValue(":Description", $Description, PDO::PARAM_STR);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // mettre a jour le tableau des Boutique
            $this->getComposantById($id)->setName($Name);
            $this->getComposantById($id)->setDescription($Description);
            $this->getComposantById($id)->setImage($image);
        }
    }
    public function ajoutUserBd($Pseudo,$Password){
    $req="
    INSERT INTO Users (Pseudo,Password)
    value (:Pseudo,:Password)";
    // connexion à bd
    $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
    $stmt->bindValue(":Pseudo",$Pseudo,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
    $stmt->bindValue(":Password",$Password,PDO::PARAM_STR);
    // sert à executer requete et a ajouter données à la bdd
    $resultat=$stmt->execute();
    // ferme connexion abdd
    $stmt->closeCursor();

    // si requete fonctionne 
    if($resultat>0){
    // on ajoute le Users a la classe Users
    $Users=new Users($this->getBdd()->lastInsertId(),$Name,$Password,);
        // ajoute Users au tableau de Users
        $this->ajoutUsers($Users);
        }
    }
}
?>