<?php
// Création de 3 tableaux vides
$tab = [];
$tab2 = [];
$tab3 = [];

// Demande à l'utilisateur d'entrer un nombre entre 1 et 4
$nbMenu = readline("Entrez un nombre entre 1 et 4:");

// Vérifie que le nombre entré est bien compris entre 1 et 4
// Si ce n'est pas le cas, demande à nouveau à l'utilisateur d'entrer un nombre
while ($nbMenu < 1 || $nbMenu > 4){
    echo " recommence le chiffre n'est pas bon";
    $nbMenu = readline("Entrez un nombre entre 1 et 4:"); 
}

// Utilise un "switch" pour exécuter une action en fonction du nombre entré par l'utilisateur
switch ($nbMenu){
    case 1:
        // Remplit le premier tableau avec 10 nombres aléatoires compris entre 20 et 100
        // Affiche chaque nombre
        for($i=1;$i<=10;$i++){
            $nombre = rand(20,100);
            $tab[$i] = $nombre;
            echo $tab[$i] . "\n";  
        }
        // Trie le tableau en ordre croissant
        // Affiche chaque élément du tableau
        echo '****************** ORDRE CROISSANT*************' . "\n";
        $tab2 = sort($tab);
        foreach($tab as $valeur){
            echo $valeur . "\n";
        }
        break;
    case 2:
        // Remplit le premier tableau avec 10 nombres aléatoires compris entre 20 et 100
        // Affiche chaque nombre
        for($i=1;$i<=10;$i++){
            $nombre = rand(20,100);
            $tab[$i] = $nombre;
            echo $tab[$i] . "\n";
        }
        // Trie le tableau en ordre décroissant
        // Affiche chaque élément du tableau
        echo '****************** ORDRE DECROISSANT*************' . "\n";
        $tab3 = rsort($tab);
        foreach($tab as $valeur){
            echo $valeur . "\n";
    }
        break;
    case 3:
        // Remplit le premier tableau avec 10 nombres aléatoires compris entre 20 et 100
        // Affiche chaque nombre
        for($i=1;$i<=10;$i++){
            $nombre = rand(20,100);
            $tab[$i] = $nombre;
            echo $tab[$i] . "\n";
        }   
        // Remplit le deuxième tableau avec 10 nombres aléatoires compris entre 20 et 100
        // Affiche chaque nombre
        for($i=1;$i<=10;$i++){
            $nombre2 = rand(20,100);
            $tab2[$i] = $nombre2;
            echo $tab2[$i] . "\n";   
        }
        // Remplit le troisième tableau avec les 10 nombres aléatoire rempli dans le premier et deuxième tableau
        // Affiche chaque nombre
        for($i=1;$i<count($tab);$i++){
            $tab3[$i] = $tab[$i] + $tab2[$i];
            echo $tab3[$i] . "\n"; 
        } 
        break;
    case 4:
        // Remplit le premier tableau avec 10 nombres aléatoires compris entre 20 et 100
        // Affiche chaque nombre
        for( $i=0 ; $i<10 ; $i++ ){
            $nombre = rand(20,100);
            $tab[$i] = $nombre ;
        }
        // Remplit le deuxième tableau avec 10 nombres aléatoires compris entre 20 et 100
        // Affiche chaque nombre
        for( $i=0 ; $i<10 ; $i++ ){
            $nombre2 = rand(20,100);
            $tab2[$i] = $nombre2 ;
        }
        // Remplit le troisième tableau avec les 10 nombres aléatoire rempli dans le premier et deuxième tableau
        // Affiche chaque nombre
        for($i=0;$i<count($tab);$i++){
            $tab3[$i] = $tab[$i] + $tab2[$i]; 
            echo $tab3[$i] . "\n";
        }
        echo "******************Tableaux inversé*************************** \n";
        for($i=0;$i<count($tab);$i++){
            $tab3[$i] = $tab[$i] + $tab2[$i];
            echo $tab3[9-$i] . "\n"; 
        }
        break;
    }
?>