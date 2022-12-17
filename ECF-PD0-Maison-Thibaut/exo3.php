<?php
// Déclaration de la variable $reponse qui sera utilisée pour la boucle while
$reponse = 1 ;
// Début de la boucle while qui s'exécutera tant que $reponse n'est pas égal à "N"
while($reponse != "N" ){
    // Demande de la valeur de a à l'utilisateur et stockage de la réponse dans la variable $A
    $A = readline("Quelle est la valeur de a : ");
    // Demande de la valeur de b à l'utilisateur et stockage de la réponse dans la variable $B
    $B = readline("Quelle est la valeur de b : ");
    // Demande de la valeur de c à l'utilisateur et stockage de la réponse dans la variable $C
    $C = readline("Quelle est la valeur de c : ");
    // Calcul de la valeur de Delta et stockage de la valeur dans la variable $D
    $D = ($B * $B) - (4 * $A * $C ) ;
    // Si Delta est inférieur à 0, il n'y a pas de racine réelle
    if($D < 0){
        // Affichage d'un message indiquant que Delta est inférieur à 0 et donc qu'il n'y a pas de racine réelle
        echo "Delta est inférieur à 0 alors il n'y a pas de racine réelle : " . "\n Delta = " . $D. "\n";
    }
    // Si Delta est égal à 0, il y a une racine double
    if($D == 0){
        // Calcul de la racine double et stockage de la valeur dans la variable $X1
        $X1 = -($B / (2*$A));
        // Affichage d'un message indiquant que Delta est égal à 0 et donc qu'il y a une racine double, ainsi que la valeur de la racine double
        echo "Delta est égal à 0 alors il y a une racine double : " . "\n Delta = " . $D . "\n" . " X1 = X2 = " . $X1 . "\n";
    }
}
    // Si Delta est supérieur à 0, il y a deux racines distinctes
    if($D > 0){
        // Calcul de la première racine et stockage de la valeur dans la variable $X1
        $X1 = -( - $B + sqrt( $D ) ) / 2 * $A ;
        // Calcul de la deuxième racine et stockage de la valeur dans la variable $X2
        $X2 = -( - $B - sqrt( $D ) ) / 2 * $A ;
        // Affichage d'un message indiquant que Delta est supérieur à 0 et donc qu'il y a deux racines distinctes, ainsi que les valeurs des racines
        // Affiche un message indiquant que Delta est supérieur à 0 et donne les valeurs de Delta et des deux racines de l'équation
        echo "Delta  est supérieur à 0 alors il y a deux racines distinctes : : " . "\n Delta = " . $D . "\n" . "L'équation s'annule pour : \nX1 = " . $x1 . "\n" . "X2 = " . $x2 . "\n";

// Initialise la variable de réponse à 1
$reponse = 1;

// Boucle tant que la réponse n'est pas "N" ou "O"
while($reponse != "N" && $reponse != "O"){
    // Demande à l'utilisateur s'il souhaite faire un autre calcul
    $reponse = readline("Voulez vous faire un autre calcul (O/N) ?");   
}
}

// Affiche un message de salutation à la fin du script
echo "Au revoir et & bientot"
?>