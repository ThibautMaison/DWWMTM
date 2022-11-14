<?php
$tabNotes = array(
    'boucher' => array(16,12,15),
    'bourdette' => array(16,10,18),
    'jean' => array(16,2,11),
    'dupond' => array(16,20,15),
    'dupont' => array(16,12,17),
    'paul' => array(16,1,15),
    );
$nombre = readline("Entrez un nombre entre 1 et 3:");
while ($nombre < 1 || $nombre > 3){
    echo " recommence le chiffre n'est pas bon";
    $nombre = readline("Entrez un nombre entre 1 et 3:"); 
}
switch ($nombre){
    case 1:
        foreach($tabNotes as $key => $value){
            echo $key . " ";
            foreach($value as $notes ){
               echo $notes . " " ;
            }
        };
        break;
    case 2:
        foreach($tabNotes as $key => $value){
            foreach($value as $notes ){
            }
        echo "la moyenne de " . $key  . " est de : " . array_sum($value) / count($value);
        echo "\n";
        }
        break;
    case 3: 
        foreach($tabNotes as $key => $value){
            foreach($value as $notes ){
            }
            if($nom == $key){
                echo "la moyenne de " . $nom  . " est de : " . array_sum($value) / count($value);
            }
        };
        break;;
}
?>