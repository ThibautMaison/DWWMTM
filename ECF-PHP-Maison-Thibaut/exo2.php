<?php
// les variables 
$nombre = readline("entrez un nombre pour lequel vous voulez la table de multiplication :");
$prod = 1;
$i = 0;
$reponse = 1;

// boucle tant que pour afficher le chiffre a multiplier jusqu'a la table de 10
while($reponse != "N" ){
while($i <= 10){
    $prod = $nombre*$i;
    echo $nombre . ' x ' . $i . ' = ' . $prod . "\n" ;
    $i++;


} 
$reponse = 1;
// Verification a la demande
while($reponse != "N" && $reponse != "O"){
    $reponse = readline("Voulez vous faire un autre calcul (O/N)");
        }
}
?>