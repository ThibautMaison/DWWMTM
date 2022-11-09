<?php
$nombreval = readline("Ecris ton nombre de valeur : ");
$tableau = [] ;
for( $i=0; $i<=($nombreval); $i++ ){
    $nombre = readline("entrez un nombre: ") . $i+1;
    $tableau[$i] = $nombre ;
}
foreach($tableau as $valeur){
    echo $valeur . "\n";
}
while($estvrai){
    $estvrai = false;
    for ($i=0;$i<=count($tableau)-2;$i++){
        if($tableau[$i] > $tableau[$i+1]){
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

    if($flag){
        echo " Les nombres sont consécutifs ! ";
        else{
            echo " Les nombres ne sont pas consécutifs ! ";
        }
    }