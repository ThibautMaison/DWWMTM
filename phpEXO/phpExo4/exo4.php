<?php
$n1 = readline ( "entrez un premier nombre de votre choix");
$n2 = readline ("entrez un deuxième nombre de votre choix");

while ($n1*$n2 != 0){
    if($n1 < $n2){
        $n2 = $n2 - $n1;
    }
    else
    $n1 = $n1 - $n2;
}
if ($n1==0){
    echo ("PGCD est ") . $n2;
}
    else{
    echo ("PGCD est ") . $n1;
}
?>