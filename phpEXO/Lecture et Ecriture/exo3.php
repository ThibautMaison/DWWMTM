<?php
$prixHT = (float)readline ('entrez un prixHT :');
$nbA = (int)readline ('entrez un nbA :');
define ("TVA",20/100);
$prixTTC = $prixHT * $nbA * TVA ;


echo "Le prixTTC est :" . $prixTTC;

?>