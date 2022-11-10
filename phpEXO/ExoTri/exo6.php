<?php
$table = [4,8,7,9,1,5,4,6];
$table2 = [7,6,5,2,1,3,7,4];
$table3 = [];
$estvrai = true;
for($i=0;$i<count($table);$i++){
    $table3[$i] = $table[$i] + $table2[$i];
    echo $table3[$i] . "\n"; 
} 
while($estvrai){
    $estvrai = false;
    for ($i=0;$i<=count($table3)-2;$i++){
        if($table3[$i] > $table3[$i+1]){
            $temp = $table3[$i];
            $table3[$i] = $table3[$i+1];
            $table3[$i+1] = $temp; 
            $estvrai = true;
        }
    }
}
foreach($table3 as $valeur){
    echo $valeur . "\n";
}
?>