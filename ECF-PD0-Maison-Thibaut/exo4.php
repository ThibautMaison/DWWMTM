<?php
// Création d'un tableau associatif contenant les éléments chimiques et leurs symboles
$tab = array(
    'Hydrogène' => 'H', 
    'Hélium' => 'He',
    'Phosphore' => 'p',
    'Vanadium' => 'v',
    'Plomb' => 'Pb',
    'Iode' => 'I',
    'Krypton' => 'Kr',
    'Xénon' => 'X',
    'Radon' => 'Rn',
    'Zirconium' => 'Zr'
); 

// Affichage du titre du tableau périodique
echo "*********** Tableau périodique des éléments chimiques***********" ;

// Parcours du tableau et affichage des éléments et de leurs symboles
foreach($tab as $key => $valeur ){
    echo  "\n";
    echo $valeur . " : " .  $key  ;
}

// Séparateur
echo  "\n";
echo "**********************" . "\n" ;

// Tri du tableau par ordre alphabétique des symboles
ksort($tab);

// Affichage du titre du tableau trié
echo "Tableau trié :";

// Parcours du tableau trié et affichage des éléments et de leurs symboles
foreach($tab as $key => $valeur ){
    echo  "\n";
    echo $valeur . " : " .  $key  ;
}
?>