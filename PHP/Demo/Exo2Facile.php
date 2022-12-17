<?php ob_start() ?>
<?php
// On déclare la variable $nom et on lui affecte la valeur "Marie"
$nom = "Marie";
// On déclare la variable $age et on lui affecte la valeur "30"
$age = "30";
// On déclare la variable $homme et on lui affecte la valeur "false"
$homme = false;

// Si la variable $homme est vraie, on affecte à la variable $homme la valeur "homme"
if($homme){
    $homme = "homme";
}
// Sinon, si la variable $homme est égale à "false", on affecte à la variable $homme la valeur "femme"
elseif($homme == false){
    $homme = "femme";
}
// On affiche dans un élément de classe "Marie" le nom, l'âge et le genre de la personne
?>
<p class="Marie"><?= $nom ?> à <?= $age ?> ans et c'est une <?= $homme ?> </p>
<?php
// On déclare la variable $nom2 et on lui affecte la valeur "Pierre"
$nom2 = "Pierre";
// On déclare la variable $age2 et on lui affecte la valeur "32"
$age2 = "32";
// On déclare la variable $homme et on lui affecte la valeur "true"
$homme = true;

// Si la variable $homme est vraie, on affecte à la variable $homme la valeur "homme"
if($homme){
    $homme = "homme";
}
// Sinon, si la variable $homme est égale à "false", on affecte à la variable $homme la valeur "femme"
elseif($homme == false){
    $homme = "femme";
}

// On affiche dans un élément de classe "Pierre" le nom, l'âge et le genre de la personne
?>
<p class="Pierre"><?= $nom2 ?> à <?= $age2 ?> ans et c'est une <?= $homme ?> </p>
<?php 
// On déclare la variable $titre et on lui affecte la valeur "EXO 2"
$titre = "EXO 2";
// On déclare la variable $content et on lui affecte la valeur retournée par la fonction ob_get_clean()
$content = ob_get_clean();
// On inclut le fichier "template.php"
require "template.php";
?>