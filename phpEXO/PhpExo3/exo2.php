<?php
$nombre1 = readline ('entrez un nombre :');
$nombre2 = readline ('entrez un nombre :');

if (($nombre1 >0 & $nombre2>0) or ($nombre1 <0 & $nombre2 <0))
{
    echo "positif";
}
else
{
    echo "negatif";
}

?>