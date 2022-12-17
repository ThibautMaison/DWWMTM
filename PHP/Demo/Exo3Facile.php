<?php ob_start() ?>
// Démarre la temporisation de sortie

<?php
// Déclare la variable $pair et lui donne la valeur null
$pair = null;

// Déclare la variable $nombre1 et lui donne la valeur 5
$nombre1 = 5;

// Vérifie si la valeur de $nombre1 est pair
if($nombre1%2 == 0){
    // Si oui, affecte la chaîne de caractères " est un nombre pair " à la variable $pair
    $pair = " est un nombre pair "; 
}
else{
    // Si non, affecte la chaîne de caractères " est un nombre impair " à la variable $pair
    $pair = " est un nombre impair ";
    }
?>
// Affiche le contenu de la variable $nombre1 suivi du contenu de la variable $pair

<p><?php echo $nombre1 . $pair ?></p>
<?php 
// Déclare la variable $pair et lui donne la valeur null
$pair = null;

// Déclare la variable $nombre2 et lui donne la valeur 122
$nombre2 = 122;

// Vérifie si la valeur de $nombre2 est pair
if($nombre2%2 == 0){
    // Si oui, affecte la chaîne de caractères " est un nombre pair " à la variable $pair
    $pair = " est un nombre pair "; 
}
else{
    // Si non, affecte la chaîne de caractères " est un nombre impair " à la variable $pair
    $pair = " est un nombre impair ";
    }
?>
// Affiche le contenu de la variable $nombre2 suivi du contenu de la variable $pair

<p><?php echo $nombre2 . $pair ?></p>
<?php 
// Déclare la variable $titre et lui donne la valeur "EXO 3"
$titre = "EXO 3";

// Récupère le contenu de la temporisation de sortie dans la variable $content
$content = ob_get_clean();

// Inclut le fichier "template.php"
require "template.php";
?>