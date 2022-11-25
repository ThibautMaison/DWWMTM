<?php
$nombre = readline ("entrez un nombre entre 10 et 20:");

while(($nombre <=10) or ($nombre >=20)){
    if($nombre > 20){
        echo "plus petit !";
        $nombre = readline ("entrez un nombre entre 10 et 20:");
    }
    elseif($nombre < 10){
        echo "plus grand !";
        $nombre = readline ("entrez un nombre entre 10 et 20:");
    }
}
    echo "bravo";
?>