<?php
$tableau = [];
for($i=0;$i<3;$i++){
    $nombre = readline("Entrez un nombre:");
    $tableau[$i] = $nombre;
}
$moyenne = array_sum($tableau) /count($tableau);
echo "La moyenne est : $moyenne"
?>