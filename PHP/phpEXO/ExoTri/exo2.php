<?php 
$tableau = [5,2,3,4,1,9,8];
$estvrai = true;

while($estvrai){
    $estvrai = false;
    for ($i=0;$i<=count($tableau)-2;$i++){
        if($tableau[$i] < $tableau[$i+1]){
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
?>bgffcg  