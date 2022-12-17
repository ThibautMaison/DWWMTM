<?php
// Demande à l'utilisateur de rentrer le rayon du cercle
$rayon = readline("entrez le rayon du cercle: ");

// Définit la valeur de PI
$PI = 3.141592653589793;

// Calcule la circonférence du cercle en utilisant la formule 2 * PI * rayon
$circonference = 2 * $PI * $rayon ;

// Affiche le résultat de la circonférence du cercle
echo " La circonference du cercle est de : " . $circonference;

// Calcule la surface du cercle en utilisant la formule PI * (rayon * rayon)
$surface = $PI * ($rayon * $rayon);

// Affiche le résultat de la surface du cercle
echo " la surface du cercle est de : " . $surface;
?>