<?php
   $nombre1=readline('Entrez un nombre:');
   $operation= readline('Operation:');
   $nombre2=readline('Entrez un nombre:');

switch($operation) {
    case'+': 
        $Result=$nombre1+$nombre2 ;
        echo " la resultat de l'operation est : $Result" ;
        break;
    case'-': 
        $Result=$nombre1-$nombre2 ;
        echo " la resultat de l'operation est : $Result" ;
        break;
    case'*': 
        $Result=$nombre1*$nombre2 ;
        echo " la resultat de l'operation est : $Result" ;
        break;                 
    case'/': 
        $Result=$nombre1/$nombre2 ;
        echo " la resultat de l'operation est : $Result" ;
        break;
}
?>