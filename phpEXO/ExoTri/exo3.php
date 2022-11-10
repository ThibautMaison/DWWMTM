<?php
$tab = [4,8,7,9,1,5,4,6];

if(count($tab) %2 != 0){
    $middle = (count($tab) -1) /2;
    for( $i=1; $i<=$middle ; $i++ ){
        $temp = $tab[$middle - $i];
        $tab[$middle - $i] = $tab[$middle + $i];
        $tab[$middle + $i] = $temp;
        }
}
else{
    $middle = (count($tab) /2);
    for( $i=1; $i<=$middle + 1 ; $i++ ){
        $temp = $tab[$i -1];
        $tab[$i -1] = $tab[count($tab) - $i];
        $tab[count($tab) - $i] = $temp;
        }
}
?>