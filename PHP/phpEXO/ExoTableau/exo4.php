<?php
$table = [4,8,7,9,1,5,4,6];
$table2 = [7,6,5,2,1,3,7,4];
$table3 = [];
for($i=0;$i<count($table);$i++){
    $table3[$i] = $table[$i] + $table2[$i];
    echo $table3[$i] . "\n"; 
} 
?>