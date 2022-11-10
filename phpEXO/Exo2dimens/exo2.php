<?php
$nombre =7;
for( $i=1; $i<=(2*$nombre)-1; $i++ ){
    for( $j=1; $j<=$nombre; $j++ ){
        if($i>=$nombre-($j-1) && $i<=$nombre+($j-1)){
            echo "*";
        }
    }
    echo "\n";
}
?>
