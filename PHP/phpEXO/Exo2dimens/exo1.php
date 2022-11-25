<?php
$max = 0;
$tableau = array() ;
for( $i=0; $i<=12; $i++ ){
    for( $j=0; $j<=8; $j++ ){

        $tableau[$i.$j] = $nombre = rand(1,1000);
        if($nombre > $max){
            $max = $nombre;
            $imax = $i;
            $jmax = $j;
        }
        echo $tableau [$i . $j] . " ";
    }
    echo "\n";
}
echo " Le plus grand élément est :" . $max;
echo " il se trouve aux indices :" . $imax . "," . $jmax;