<?php
$tableau = [4,8,4,8,4];
 for ($i=0; $i < count($tableau) ; $i ++ ){
    $var = $tableau[$i];
    for ($j=$i; $j < count($tableau) -1 ; $j++ ){
        if ($tableau[$j + 1] == $tableau[$i]){
            return"doublon";
    }
    }
    return"pas de doulon";
}
?>
