<?php
$nombre = readline ("entrez un nombre :");
$stop = $nombre+10;

echo " Les 10 nombres suivants sont : ";
while($nombre < $stop){
    $nombre = $nombre + 1;
    echo ". $nombre";
}
?>