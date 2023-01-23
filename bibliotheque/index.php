<?php 
// definie la constante URL
define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])?"https":"http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// recup le fichier Boutiquecontroller
require_once "controllers/BoutiqueController.php";
$ComposantController=new BoutiqueController;

// recup le fichier Usercontroller
require_once "controllers/UserController.php";
$UsersController=new UserController;

try{
    // si lutilisateur est nulle part dans url page accueil
    if(empty($_GET["page"])){
        require "views/accueil.view.php";
    }
    // permet de gerer le chgment de page quand utilisateur est deja dans une autre page
    else{
        $url=explode("/",filter_var($_GET["page"],FILTER_SANITIZE_URL));

        // on test premier element de url
        switch($url[0]){
            case"accueil" : require "views/accueil.view.php";
            break;
            case"Forum" : require "views/Forum.view.php";
            break;
            case"Bou" : require "views/Bou.view.php";
            break;
            case"Contact" : require "views/Contact.view.php";
            break;
            case"logout" : require "views/logout.php";
            break;
            case"inscription" :
                if(empty($url[1])){
                    $UsersController->inscription();
                }else if($url[1]==="9"){
                    // afficher le Users concerner
                    $UsersController->ajoutUsersValidation();
                };
            break;
            case"connexion" :                
                if(empty($url[1])){
                $UsersController->connexion();
            }else if($url[1]==="3"){
                // afficher le Users concerner
                $UsersController->UsersValidation();
            };
            break;
            case"Boutique" :
            // si on a rien en tant que 2ème élément dans mon URL
                if(empty($url[1])){
                    $ComposantController->afficherBoutique();
                }else if($url[1]==="l"){
                    // afficher le Composant concerner
                    $ComposantController->afficherComposant((int)$url[2]);
                }else if($url[1]==="ordinateur"){
                    $ComposantController->afficherBoutiqueOrdinateur();
                }else if($url[1]==="ecran"){
                    $ComposantController->afficherBoutiqueEcran();
                }else if($url[1]==="clavier"){
                    $ComposantController->afficherBoutiqueClavier();
                }else if($url[1]==="souris"){
                    $ComposantController->afficherBoutiqueSouris();
                }else if($url[1]==="casque"){
                    $ComposantController->afficherBoutiqueCasque();
                }else if($url[1]==="tapisdesouris"){
                    $ComposantController->afficherBoutiqueTapisdesouris();
                }else if($url[1]==="chaise"){
                    $ComposantController->afficherBoutiqueChaise();
                }else if($url[1]==="accessoire"){
                    $ComposantController->afficherBoutiqueAccessoire();
                }else if($url[1]==="stuffperso"){
                    $ComposantController->afficherBoutiqueStuffperso();
                }else if($url[1]==="a"){
                    $ComposantController->ajoutComposant();
                }else if($url[1]==="m"){
                    $ComposantController->modificationComposant((int)$url[2]);
                }else if($url[1]==="s"){
                    $ComposantController->suppressionComposant((int)$url[2]);
                }else if($url[1]==="av"){
                    $ComposantController->ajoutComposantValidation();
                }else if($url[1]==="mv"){
                    $ComposantController->modificationComposantValidation();
                }else{
                    // lever l'erreur si page nexiste pas
                    throw new Exception("La page n'existe pas");
                }
            break;
            // c'est une sorte de else ! De plus on lève lerreur
            default : throw new Exception("La page n'existe pas");
        }
    }
}catch(Exception $e){   //permet dafficher le message
    echo $e->getMessage();
}
