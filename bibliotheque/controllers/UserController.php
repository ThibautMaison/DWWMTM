<?php
session_start();
require_once "models/UsersManager.class.php";

class UserController {
    private $UsersManager;

    public function __construct(){
        $this->UsersManager=new UsersManager;
        $this->UsersManager->chargementUser();
    }
    
    public function connexion(){
        require "views/connexion.view.php";
    }

    public function inscription(){
        require "views/inscription.view.php";
    }

    public function ajoutUsersValidation(){
        $this->UsersManager->ajoutUsersBd($_POST["Pseudo"],$_POST["Email"],$_POST["Password"]);
        $_SESSION['alert']= [ 
        "type"=> "success",        
    ];
        header("Location: ".URL."connexion"); 
    
        }
    public function UsersValidation(){
        $this->UsersManager->ConnexionUser($_POST["Pseudo"],$_POST["Password"]);
        header("Location: ".URL."accueil"); 
    }


    // public function suppressionUsers($id){
    //     $nomImage= $this->UsersManager->getUsersById($id)->getImage();
    //     unlink("public/images/".$nomImage);
    //     $this->UsersManager->suppressionUsersBd($id);
    //     header("Location: ".URL."inscription");
    // }

    // public function modificationUsers($id){
    //     $Users = $this->UsersManager->getUsersById($id);
    //     require "views/modifierUsers.view.php";
    // }

    // public function modificationUsersValidation(){
    //     $imageActuel = $this->UsersManager->getUsersById((int)$_POST["identifiant"])->getImage();
    //     $file = $_FILES['image'];

    //     if($file["size"]>0){
    //         unlink("public/images/" . $imageActuel);
    //         $repertoire="public/images/";
    //         $nomImageToAdd =$this->ajoutImage($file,$repertoire);
    //     }else{
    //         $nomImageToAdd = $imageActuel;
    //     }
    //     $this->UsersManager->modificationUsersBd((int)$_POST["identifiant"], $_POST["Pseudo"], $_POST["Email"],$nomImageToAdd);
    //     header("Location: ".URL."inscription");
    // }
}
?>