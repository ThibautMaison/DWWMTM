<?php
$nombre= readline("Saisir un nombre pair et divisible par 3 :");
$compteur; 

if ($nombre%2 == 0){
    while($nombre%3 !=0){
        $nombre=$nombre%3;
        $compteur=$compteur+1; 
    }
}
    else{
        $nombre= readline("le nombre n'est pas pair, RECOMMENCER!: ");
}
        $nombre= readline("le nombre n'est pas divisible par 3, RECOMMENCER!: ");
?>