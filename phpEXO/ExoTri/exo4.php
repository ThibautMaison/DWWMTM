<?php
$tab = ["Marraine","Walid","Thibaut","Fred","Maxime","Kesary","Damien","Manon"];
$chercher = readline("Cherchez prénom ");
for( $i = 0 ; $i<count($tab);$i++){
    if($chercher == $tab[$i]){
        echo $i . "   "   . $chercher ;
    }
}
?>