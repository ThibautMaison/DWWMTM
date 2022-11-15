<?php
$valeur = readline("nombre de valeurs : ");
$tab = [];
for($i = 0 ; $i <= $valeur ; $i++){
    $nombre = rand(40,50);
    echo "\n" . $i . "-" . $nombre ;
    if($nombre == 42){
        echo " est la rÃ©ponse" ;
    }
}
?>