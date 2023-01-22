<?php
require_once "models/ComposantManager.class.php";

class BoutiqueController {
    private $ComposantManager;

    public function __construct(){
        // on instancie et charge les Boutique
        $this->ComposantManager=new ComposantManager;
        $this->ComposantManager->chargementBoutique();
    }
    
    public function afficherBoutique(){
        // $Boutique recup le tableau des Boutique
        $Boutique=$this->ComposantManager->getBoutique();
        require "views/Boutique.view.php";
        // qd on require, tous ce qui est declarer ds fonction et va dans require
    }
    public function afficherOrdinateur(){
        // $Boutique recup le tableau des Boutique
        $Boutique=$this->ComposantManager->getBoutique();
        require "views/Ordinateur.view.php";
        // qd on require, tous ce qui est declarer ds fonction et va dans require
    }

    public function afficherComposant($id){
        $Composant=$this->ComposantManager->getComposantById($id);
        require "views/afficherComposant.view.php";
    }

    public function ajoutComposant(){
        require "views/ajoutComposant.view.php";
    }

    public function ajoutComposantValidation(){
        // charge image
        $file=$_FILES["image"];
        // ajouter image au image public
        $repertoire="public/images/";
        $nomImageAjoute= $this->ajoutImage($file,$repertoire);
        // ajouter le Composant en bdd
        $this->ComposantManager->ajoutComposantBd($_POST["Name"],$_POST["Categorie"],$_POST["Lien"],$nomImageAjoute);
        // redirige lutilisateur vers la pages des Boutique
        header("Location: ".URL."Boutique");
    }

    private function ajoutImage($file, $dir){

        // si la personne a oublier choisir un fichier
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        // sil y a pas de dossier on le cree
        // 0777 ce sont des droit
        if(!file_exists($dir)) mkdir($dir,0777);

        // recup extension fichier
        $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        // ajout numero fichier generer aleatoire (eviter dooublons)
        $random = rand(0,99999);
        // genere nom fichier
        $target_file = $dir.$random."_".$file['name'];

        // verifie si bien une image
        if(!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        // verifie extension
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        // verifie si existe pas deja
        if(file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        // verifie taille
        if($file['size'] > 50000000000)
            throw new Exception("Le fichier est trop gros");
        // si pas reusssi a ajouter image
        if(!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        //  si functionne dit nom image qui a été ajouter
        else return ($random."_".$file['name']);
    }

    public function suppressionComposant($id){
        $nomImage= $this->ComposantManager->getComposantById($id)->getImage();
        // retire l'image de mon dossier
        unlink("public/images/".$nomImage);
        // supprime ds bdd
        $this->ComposantManager->suppressionComposantBd($id);
        // redirige lutilisateur vers la pages des Boutique
        header("Location: ".URL."Boutique");
    }

    public function modificationComposant($id){
        $Composant = $this->ComposantManager->getComposantById($id);
        require "views/modifierComposant.view.php";
    }

    public function modificationComposantValidation(){
        $imageActuel = $this->ComposantManager->getComposantById((int)$_POST["identifiant"])->getImage();
        $file = $_FILES['image'];

        if($file["size"]>0){
            // supprime ancienne image dans dossier
            unlink("public/images/" . $imageActuel);
            // ajouter image au image public
            $repertoire="public/images/";
            $nomImageToAdd =$this->ajoutImage($file,$repertoire);
        }else{
            $nomImageToAdd = $imageActuel;
        }
        $this->ComposantManager->modificationComposantBd((int)$_POST["identifiant"], $_POST["Name"], $_POST["Categorie"],$_POST["Lien"],$nomImageToAdd);
        header("Location: ".URL."Boutique");
    }
}
?>