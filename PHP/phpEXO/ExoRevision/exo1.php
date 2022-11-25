<?php
$tab = array("Angleterre",
"USA" ,
"Canada" ,
"Japon" ,
"Maroc" ,
"Mexique",
"Inde" );
$pays = readline("entrez un pays:");
$value = readline("entrez un nombre a convertir:");
if($pays == 'Angleterre'){
    $value = $value*0.88;
    echo "=" . $value . " Livre sterling" ;  
}
elseif($pays == 'USA'){
    $value = $value*1.04;
    echo "=" . $value . " Dollars" ; 
}
elseif($pays == ' Canada'){
    $value = $value*1.38;
    echo "=" . $value . " Dollars CA" ; 
}
elseif($pays == 'Japon'){
    $value = $value*145;
    echo "=" . $value . " Yen" ; 
}
elseif($pays == 'Mexique'){
    $value = $value*20;
    echo "=" . $value . " Pesos" ; 
}
elseif($pays == 'Maroc'){
    $value = $value*11.11;
    echo "=" . $value . " Dirham marocain" ; 
}
elseif($pays == 'Inde'){
    $value = $value*84.5;
    echo "=" . $value . " Roupie indienne" ; 
}

?>