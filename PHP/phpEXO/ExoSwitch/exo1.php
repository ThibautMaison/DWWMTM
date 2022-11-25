<?php
$nombre = readline("Entrez un nombre entre 1 et 4:");
while ($nombre < 1 || $nombre > 4){
    echo " recommence le chiffre n'est pas bon";
    $nombre = readline("Entrez un nombre entre 1 et 4:"); 
}
switch ($nombre){
    case 1:
        echo"Hello";
        break;
    case 2:
        echo"yo";
        break;
    case 3: 
        echo"bonjour";
        break;
    case 4:
        echo"salam";
        break;
}
?>