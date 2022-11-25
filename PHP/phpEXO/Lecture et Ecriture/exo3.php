<?php
$prixHT = readline ('entrez un prixHT :');
$nbA = readline ('entrez un nbA :');
define ("TVA",1.2);
$prixTTC = $prixHT * $nbA * TVA ;


echo "Le prixTTC est :" . $prixTTC;

?>