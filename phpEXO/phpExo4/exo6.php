<?php
$nombre = readline("entrez un nombre:");
$prod = 1;
$i = 0;
while($i <= 100){
    $prod = $nombre*$i;
    echo $nombre . ' x ' . $i . ' = ' . $prod . "\n" ;
    $i++;
}
?>