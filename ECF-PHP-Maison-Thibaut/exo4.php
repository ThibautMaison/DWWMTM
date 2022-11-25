<?php
// valeur du tableau périodique 
$tab = array('Hydrogène' =>'H', 
'Hélium' =>'He' ,
'Phosphore' =>'p',
'Vanadium' =>'v',
'Plomb' =>'Pb',
'Iode' =>'I',
'Krypton' =>'Kr',
'Xénon' =>'X',
'Radon' =>'Rn',
'Zirconium' =>'Zr',); 
echo "*********** Tableau périodique des éléments chimiques***********" ;;
// affichage du tableau 
foreach($tab as $key => $valeur ){
    echo  "\n";
    echo $valeur . " : " .  $key  ;
}
echo  "\n";
echo "**********************" . "\n" ;
echo "Tableau trié :";
// affichage du tableau trié
ksort($tab);
foreach($tab as $key => $valeur ){
    echo  "\n";
    echo $valeur . " : " .  $key  ;
    }
?>