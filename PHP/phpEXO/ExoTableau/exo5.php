<?php
$max = 1;
$nombreval = readline("Ecris ton nombre de valeur : ");
$tableau = [] ;
for( $i=1; $i<=$nombreval ; $i++ ){
    $nombre = readline("Ecrire une valeur : ");
    $tableau[$i] = $nombre ;
    if($max <= $tableau[$i]){
        $max = $tableau[$i];
        $imax = $i;
    }
}
echo "La plus grande valeur est: " . $max .  "\n" ;
echo "elle est en " . $imax . " position !"
?>