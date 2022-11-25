<?php
$tabNotes = array(
'boucher' => array(16,12,15),
'bourdette' => array(16,10,18),
'jean' => array(16,2,11),
'dupond' => array(16,20,15),
'dupont' => array(16,12,17),
'paul' => array(16,1,15),
);
$nom = readline("entrez un nom:");
foreach($tabNotes as $key => $value){
    foreach($value as $notes ){
    }
    if($nom == $key){
        echo "la moyenne de " . $nom  . " est de : " . array_sum($value) / count($value);
    }
}
?>
