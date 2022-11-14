<?php
$nombreval = readline("Entrez un nombre de valeur : ") ;
$tab = [] ;
$estvrai = true ;

for( $i=0; $i<$nombreval ; $i++ ){
    $nombre = readline("Ecrire une valeur : ");
    $tab[$i] = $nombre ;

}
echo ("Le tableau avant : " ) . "\n";
foreach($tab as $valeur){
    echo $valeur . "\n";
}
 while($estvrai){
    $estvrai = false ;
    for( $i=0; $i<=count($tab)-2 ; $i++ ){
        if($tab[$i] > $tab[$i+1]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1] ;
            $tab[$i+1] = $temp ;
            $estvrai = true ;

        }

    }

 }

echo ("Le tableau apres : ") . "\n" ;
foreach($tab as $valeur){
    echo $valeur . "\n";
}
for( $i=0; $i<=count($tab)-2 ; $i++ ){
    if($tab[$i]+1 == $tab[$i+1]){
       echo ("Consécutifs") . "\n";
        }
        else{
           echo ("Pas consécutifs") . "\n";
        }
   }
?>