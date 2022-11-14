<?php
$nombre =7;
for( $i=1; $i<=($nombre)-1; $i++ ){
    for( $j=1; $j<=$nombre; $j++ ){
        if($i>=$nombre-($j-1)){
            echo $i;
        }
    }
    echo "\n";
}
?>