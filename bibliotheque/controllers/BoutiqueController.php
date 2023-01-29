<?php
require_once "models/ComposantManager.class.php";

class BoutiqueController {
    private $ComposantManager;
    private $OrdinateurManager;
    private $EcranManager;
    private $ClavierManager;
    private $SourisManager;
    private $CasqueManager;
    private $TapisdesourisManager;
    private $ChaiseManager;
    private $AccessoireManager;
    private $StuffpersoManager;

    public function __construct(){
        // on instancie et charge les Boutique
        $this->ComposantManager=new ComposantManager;
        $this->ComposantManager->chargementBoutique();
        $this->OrdinateurManager=new ComposantManager;
        $this->OrdinateurManager->chargementBoutiqueOrdinateur();
        $this->EcranManager=new ComposantManager;
        $this->EcranManager->chargementBoutiqueEcran();
        $this->ClavierManager=new ComposantManager;
        $this->ClavierManager->chargementBoutiqueClavier();
        $this->SourisManager=new ComposantManager;
        $this->SourisManager->chargementBoutiqueSouris();
        $this->CasqueManager=new ComposantManager;
        $this->CasqueManager->chargementBoutiqueCasque();
        $this->TapisdesourisManager=new ComposantManager;
        $this->TapisdesourisManager->chargementBoutiqueTapisdesouris();
        $this->ChaiseManager=new ComposantManager;
        $this->ChaiseManager->chargementBoutiqueChaise();
        $this->AccessoireManager=new ComposantManager;
        $this->AccessoireManager->chargementBoutiqueAccessoire();
        $this->StuffpersoManager=new ComposantManager;
        $this->StuffpersoManager->chargementBoutiqueStuffperso();
    }
    
    public function afficherBoutique(){
        $Boutique=$this->ComposantManager->getBoutique();
        require "views/Boutique.view.php";
    }
    public function afficherBoutiqueAdmin(){
        $Boutique=$this->ComposantManager->getBoutique();
        require "views/AdminBoutique.view.php";
    }
    public function afficherBoutiqueOrdinateur(){
        $Boutique=$this->OrdinateurManager->getBoutique();
        require "views/Ordinateur.view.php";
    }
    public function afficherBoutiqueEcran(){
        $Boutique=$this->EcranManager->getBoutique();
        require "views/Ecran.view.php";
    }
    public function afficherBoutiqueClavier(){
        $Boutique=$this->ClavierManager->getBoutique();
        require "views/Clavier.view.php";
    }
    public function afficherBoutiqueSouris(){
        $Boutique=$this->SourisManager->getBoutique();
        require "views/Souris.view.php";
    }
    public function afficherBoutiqueCasque(){
        $Boutique=$this->CasqueManager->getBoutique();
        require "views/Casque.view.php";
    }
    public function afficherBoutiqueTapisdesouris(){
        $Boutique=$this->TapisdesourisManager->getBoutique();
        require "views/Tapisdesouris.view.php";
    }
    public function afficherBoutiqueChaise(){
        $Boutique=$this->ChaiseManager->getBoutique();
        require "views/Chaise.view.php";
    }
    public function afficherBoutiqueAccessoire(){
        $Boutique=$this->AccessoireManager->getBoutique();
        require "views/Accessoire.view.php";
    }
    public function afficherBoutiqueStuffperso(){
        $Boutique=$this->StuffpersoManager->getBoutique();
        require "views/Stuffperso.view.php";
    }

    public function afficherComposant($id){
        $Composant=$this->ComposantManager->getComposantById($id);
        require "views/afficherComposant.view.php";
    }

    public function ajoutComposant(){
        require "views/ajoutComposant.view.php";
    }

    public function ajoutComposantValidation(){
        $file=$_FILES["image"];
        $repertoire="public/images/";
        $nomImageAjoute= $this->ajoutImage($file,$repertoire);
        $this->ComposantManager->ajoutComposantBd($_POST["Name"],$_POST["Description"],$_POST["Prix"],$_POST["Lien"],$nomImageAjoute,$_POST["idCategorie"]);
        header("Location: ".URL."Admin/boutique");
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

    public function suppressionComposant($id){
        $nomImage= $this->ComposantManager->getComposantById($id)->getImage();
        unlink("public/images/".$nomImage);
        $this->ComposantManager->suppressionComposantBd($id);
        header("Location: ".URL."Admin");
    }

    public function modificationComposant($id){
        $Composant = $this->ComposantManager->getComposantById($id);
        require "views/modifierComposant.view.php";
    }

    public function modificationComposantValidation(){
        $imageActuel = $this->ComposantManager->getComposantById((int)$_POST["identifiant"])->getImage();
        $file = $_FILES['image'];
        if($file["size"]>0){
            unlink("public/images/" . $imageActuel);
            $repertoire="public/images/";
            $nomImageToAdd =$this->ajoutImage($file,$repertoire);
        }else{
            $nomImageToAdd = $imageActuel;
        }
        $this->ComposantManager->modificationComposantBd((int)$_POST["identifiant"], $_POST["Name"], $_POST["Description"],$_POST["Prix"],$_POST["Lien"],$nomImageToAdd,$_POST["idCategorie"]);
        header("Location: ".URL."Admin/boutique");
    }
}
?>