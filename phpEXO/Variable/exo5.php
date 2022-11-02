<?php 
$A = 1;
$B = 2;
$C = 3;
$Z = $A;
$A = $B;
$B = $C;
$C = $Z;


echo "La variable A vaut : " . $A . "\n";
echo "La variable B vaut : " . $B . "\n";
echo "la variable C vaut : " . $C;

?>