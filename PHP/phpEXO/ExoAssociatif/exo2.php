<?php

$tabNotes = array("boucher" =>16, "bourdette" => 13, "bourd"=>8, "bouchette" => 20, "bou" =>2 );

foreach ($tabNotes as $nom => $valeur){
    echo  $nom . " : " . $valeur . " ";
}
$moyenne = array_sum($tabNotes) /count($tabNotes);
echo "La moyenne est : $moyenne";
?>