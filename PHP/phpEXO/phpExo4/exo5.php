<?php
$nb1 = readline("entrez un premier nombre de votre choix");
$nb2 = readline("entrez un deuxième nombre de votre choix");

$nba = $nb1;
$nbb = $nb2;

while ( $nb1*$nb2 != 0 ){
    if($nb1 > $nb2){
        $nb1 = $nb1 - $nb2;
    }
    else
        $nb2 = $nb2 - $nb1;
}
if ($nb1==0){
    echo (("PGCD est ") . ($nba*$nbb) /$nb2);
}
    else{
    echo (("PGCD est ") . ($nba*$nbb) /$nb1);
}
?>