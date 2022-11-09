<?php 
$tableau = [5,2,3,4,1,9,8];
for ($i=0;$i<=count($tableau)-2;$i++){
    $posmaxi = $i;
}
    for ($j=$i+1;$i<=count($tableau)-1;$i++){
        if($tableau[$j] > $tableau[$posmaxi]){
            $temp = $tableau[$i];
            $tableau[$i] = $tableau[$i+1];
            $tableau[$i+1] = $temp; 
            $estvrai = true;
        }
    }
}
foreach($tableau as $valeur){
    echo $valeur . "\n";
}
?>