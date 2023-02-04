<?php
// definie la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


// recup le fichier Usercontroller
require_once "controllers/UserController.php";
$UsersController = new UserController;

require_once "controllers/locationController.php";
$filmController = new locationController;

try {
    // si lutilisateur est nulle part dans url page accueil
    if (empty($_GET["page"])) {
        require "views/accueil.view.php";
    }
    // permet de gerer le chgment de page quand utilisateur est deja dans une autre page
    else {
        $url = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));

        // on test premier element de url
        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
                case "Admin":
                    if (empty($url[1])) {
                        require "views/Admin.view.php";
                    } else if ($url[1] === "location") {
                        // afficher le Users concerner
                        $filmController->afficherlocationAdmin();
                    } else if ($url[1] === "users") {
                        // afficher le Users concerner
                        $UsersController->afficherUsersAdmin();
                    } else if ($url[1] === "ajoutuser") {
                        $UsersController->ajoutUsers();
                    } else if ($url[1] === "ajoutvalidationuser") {
                        $UsersController->ajoutUsersValidationAdmin();
                    } else if ($url[1] === "ajoutfilm") {
                        $filmController->ajoutfilm();
                    } else if ($url[1] === "ajoutvalidationfilm") {
                        $filmController->ajoutfilmValidation();
                    } else if ($url[1] === "modificationfilm") {
                        $filmController->modificationfilm((int)$url[2]);
                    } else if ($url[1] === "modificationvalidationfilm") {
                        $filmController->modificationfilmValidation();
                    } else if ($url[1] === "modificationuser") {
                        $UsersController->modificationUsers((int)$url[2]);
                    } else if ($url[1] === "modificationvalidationuser") {
                        $UsersController->modificationUsersValidation();
                    } else if ($url[1] === "supprimerfilm") {
                        $filmController->suppressionfilm((int)$url[2]);
                    } else if ($url[1] === "supprimeruser") {
                        $UsersController->suppressionUsers((int)$url[2]);
                    };
                    break;
            case "Contact":
                require "views/Contact.view.php";
                break;
            case "logout":
                require "views/logout.php";
                break;
            case "inscription":
                if (empty($url[1])) {
                    $UsersController->inscription();
                } 
                else if ($url[1] === "9") {
                    $UsersController->ajoutUsersValidation();
                };
                break;
            case "connexion":
                if (empty($url[1])) {
                    $UsersController->connexion();
                } else if ($url[1] === "3") {
                    $UsersController->UsersValidation();
                };
                break;
            case "location":
                $locationId = null;
                switch ($url[1] ?? '') {
                    case "l":
                        $filmController->afficherfilm((int)$url[2]);
                        break;
                    case "ordinateur":
                        $locationId = 1;
                        break;
                    case "ecran":
                        $locationId = 2;
                        break;
                    case "clavier":
                        $locationId = 3;
                        break;
                    case "souris":
                        $locationId = 4;
                        break;
                    case "casque":
                        $locationId = 5;
                        break;
                    case "tapisdesouris":
                        $locationId = 6;
                        break;
                    case "chaise":
                        $locationId = 7;
                        break;
                    case "accessoire":
                        $locationId = 9;
                        break;
                }

                if ($locationId !== null) {
                    $filmController->afficherlocationParCategorie($locationId);
                } elseif (empty($url[1])) {
                    $filmController->afficherlocationParCategorie();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {   //permet dafficher le message
    echo $e->getMessage();
}
