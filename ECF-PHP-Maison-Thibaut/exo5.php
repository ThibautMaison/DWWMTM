<?php
// tout les tableau pour les differents choix 
$tab = [];
$tab2 = [];
$tab3 = [];

// verification pour rentrer un nombre entre 1 et 4
$nbMenu = readline("Entrez un nombre entre 1 et 4:");
while ($nbMenu < 1 || $nbMenu > 4){
    echo " recommence le chiffre n'est pas bon";
    $nbMenu = readline("Entrez un nombre entre 1 et 4:"); 
}
switch ($nbMenu){
    case 1:
// Remplissage d'un tableau avec 10nombre
        for($i=1;$i<=10;$i++){
            $nombre = rand(20,100);
            $tab[$i] = $nombre;
            echo $tab[$i] . "\n";  
        }
        echo '****************** ORDRE CROISSANT*************' . "\n";
        // Trier le tableau dans lodre croissant
        $tab2 = sort($tab);
        foreach($tab as $valeur){
            echo $valeur . "\n";
        }
        break;
    case 2:
        // Remplissage d'un tableau avec 10nombre
        for($i=1;$i<=10;$i++){
            $nombre = rand(20,100);
            $tab[$i] = $nombre;
            echo $tab[$i] . "\n";
        }
        echo '****************** ORDRE DECROISSANT*************' . "\n";
        // Trier le tableau dans lodre decroissant
        $tab3 = rsort($tab);
        foreach($tab as $valeur){
            echo $valeur . "\n";
    }
        break;
    case 3:
        // Remplissage d'un premier tableau avec 10nombre
        for($i=1;$i<=10;$i++){
            $nombre = rand(20,100);
            $tab[$i] = $nombre; 
            echo $tab[$i] . "\n";  
        }
        // Remplissage d'un second tableau avec 10nombre        
        for($i=1;$i<=10;$i++){
            $nombre2 = rand(20,100);
            $tab2[$i] = $nombre2;
            echo $tab2[$i] . "\n";   
        }
        // addiction des 2 tableaux pour en donner un 3eme
        for($i=1;$i<count($tab);$i++){
            $tab3[$i] = $tab[$i] + $tab2[$i];
            echo $tab3[$i] . "\n"; 
        } 
        break;
    case 4:
        // Remplissage d'un premier tableau avec 10nombre  
        for( $i=0 ; $i<10 ; $i++ ){
            $nombre = rand(20,100);
            $tab[$i] = $nombre ;
        }
        // Remplissage d'un second tableau avec 10nombre 
        for( $i=0 ; $i<10 ; $i++ ){
            $nombre = rand(20,100);
            $tab2[$i] = $nombre ;
        }
        // addiction des 2 tableaux pour en donner un 3eme
        for($i=0;$i<count($tab);$i++){
            $tab3[$i] = $tab[$i] + $tab2[$i]; 
            echo $tab3[$i] . "\n";
        }
        // inversement du 3eme tableau
        echo "******************Tableaux inversé*************************** \n";
        for($i=0;$i<count($tab);$i++){
            $tab3[$i] = $tab[$i] + $tab2[$i];
            echo $tab3[9-$i] . "\n"; 
        }
        break;
    }
?>