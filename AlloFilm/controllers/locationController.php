<?php
require_once "models/filmManager.class.php";

class locationController {
    private $filmManager;

    public function __construct(){
        $this->instantiateManagers();
    }
    
    private function instantiateManagers() {
        $this->filmManager=new filmManager;
        $this->filmManager->chargementlocation();
    }

    public function afficherlocationParCategorie($categoryId = null){
        if ($categoryId === null) {
            $location=$this->filmManager->getlocation();
            require "views/location.view.php";
            return;
        }
    }
    
    public function afficherlocationAdmin(){
        $location=$this->filmManager->getlocation();
        require "views/Adminlocation.view.php";
    }

    public function afficherfilm($id){
        $film=$this->filmManager->getfilmById($id);
        require "views/afficherfilm.view.php";
    }

    public function ajoutfilm(){
        require "views/ajoutfilm.view.php";
    }

    public function ajoutfilmValidation(){
        $file=$_FILES["image"];
        $repertoire="public/images/";
        $nomImageAjoute= $this->ajoutImage($file,$repertoire);
        $this->filmManager->ajoutfilmBd($_POST["Name"],$_POST["Description"],$_POST["Prix"],$_POST["Lien"],$nomImageAjoute,$_POST["idCategorie"]);
        header("Location: ".URL."Admin/location");
    }

    private function ajoutImage($file, $dir){
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");
            
        if(!file_exists($dir)) mkdir($dir,0777);
        $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        $random = rand(0,99999);
        $target_file = $dir.$random."_".$file['name'];

        if(!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if(file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if($file['size'] > 50000000000)
            throw new Exception("Le fichier est trop gros");
        if(!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random."_".$file['name']);
    }

    public function suppressionfilm($id){
        $nomImage= $this->filmManager->getfilmById($id)->getImage();
        unlink("public/images/".$nomImage);
        $this->filmManager->suppressionfilmBd($id);
        header("Location: ".URL."Admin/location");
    }

    public function modificationfilm($id){
        $film = $this->filmManager->getfilmById($id);
        require "views/modifierfilm.view.php";
    }

    public function modificationfilmValidation(){
        $imageActuel = $this->filmManager->getfilmById((int)$_POST["identifiant"])->getImage();
        $file = $_FILES['image'];
        if($file["size"]>0){
            unlink("public/images/" . $imageActuel);
            $repertoire="public/images/";
            $nomImageToAdd =$this->ajoutImage($file,$repertoire);
        }else{
            $nomImageToAdd = $imageActuel;
        }
        $this->filmManager->modificationfilmBd((int)$_POST["identifiant"], $_POST["Name"], $_POST["Description"],$_POST["Prix"],$_POST["Lien"],$nomImageToAdd,$_POST["idCategorie"]);
        header("Location: ".URL."Admin/location");
    }
}
?>