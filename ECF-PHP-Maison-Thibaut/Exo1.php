<?php
// les variables 
$rayon = readline("entrez le rayon du cercle: ");
$PI = 3.141592653589793;
// calcul pour la circonference du cercle
$circonference = 2 * $PI * $rayon ;
echo " La circonference du cercle est de : " . $circonference;
// calcul pouir la surface du cercle
$surface = $PI * ($rayon * $rayon);
echo " la surface du cercle est de : " . $surface;
?>