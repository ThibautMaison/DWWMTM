<?php

$tabNotes = array(
'boucher' => array(16,12,15),
'bourdette' => array(16,10,18),
'jean' => array(16,2,11),
'dupond' => array(16,20,15),
'dupont' => array(16,12,17),
'paul' => array(16,1,15),
);
foreach($tabNotes as $key => $value){
echo "la moyenne de " . $key  . " est de : " . array_sum($value) / count($value);
echo "\n";
}
