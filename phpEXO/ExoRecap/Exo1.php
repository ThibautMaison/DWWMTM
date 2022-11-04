<?php
$NB1 = rand(1,20);

if($NB1 >=16){
    echo " il est compris entre 16 et 20";
}
    elseif ($NB1>=11){
        echo "il est compris entre 11 et 15";
}
    elseif ($NB1>=6){
        echo "il est compris entre 6 et 10";
}
    else{
        echo "il est compris entre 1 et 5";
}   
?>