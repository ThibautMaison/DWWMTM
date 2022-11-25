<?php
$chomage = array('Autriche' =>4.9, 
'Allemagne' =>9.3 ,
'Danemark' =>4.8 ,
' Espagne' =>9.4 ,
'France' =>9.7); 
$min = 100;
foreach($chomage as $key => $valeur ){
    echo "Le pays " . $key . " a : " . $valeur ."% de chomage ";
echo  "\n";
}
foreach($chomage as $key => $valeur ){
    if($valeur < $min){
    $keymin = $key;
    $min = $valeur;
}
if($valeur<= 5 ){
        echo "Le " . $key . " a un taux de chomage inferieur à 5% \n"; 
    } 
}
echo "La " . $keymin ." a le plus bas taux de chomage avec " . $min . "% de chomage"; 
?>
