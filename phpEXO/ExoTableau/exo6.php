<?php
$sup = 0;
$nombreval = readline("Ecris ton nombre de valeur : ");
$tableau = [] ;
for( $i=1; $i<=$nombreval ; $i++ ){
    $nombre = readline("Ecrire une valeur : ");
    $tableau[$i] = $nombre ;
}
    $moyenne = array_sum($tableau) /count($tableau);
    echo " La moyenne est : " . $moyenne . "\n";

for( $i=1; $i<=count($tableau) ; $i++ ){
    if($tableau[$i]>$moyenne){
            $sup = $sup +1 ;
    } 
}
    echo " il y a " . $sup . " notes au dessus de la moyenne !";