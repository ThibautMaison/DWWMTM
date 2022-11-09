<?php
$tab = [4,8,7,9,1,5,4,6];

    for( $i=0; $i<=count($tab) ; $i++ ){
        $temp = $tab[0] ;
        $tab[0] =$tab[7];
        $tab[7] =$temp;
        $temp = $tab[1] ;
        $tab[1] =$tab[6];
        $tab[6] =$temp;
        $temp = $tab[2] ;
        $tab[2] =$tab[5];
        $tab[5] =$temp;
        $temp = $tab[3] ;
        $tab[3] =$tab[4];
        $tab[4] =$temp;

    }
    for($i=0;$i<count($tab);$i++){
        echo $tab[$i] . "\n";
    }



?>