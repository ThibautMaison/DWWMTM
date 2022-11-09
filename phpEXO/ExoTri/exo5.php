<?php
$tableau = [];
$estvrai = true;
for($i=0;$i<3;$i++){
    $nombre = readline("Entrez un nombre:");
    $tableau[$i] = $nombre;
}
 for( $i=1; $i<count($tableau) ; $i++ ){
     if($nombre == $tableau[$i]){
         echo "il y a un ou plusieurs doublons";
     }
 }
// while($estvrai){
//     $estvrai = false;
//     for ($i=0;$i<count($tableau);$i++){
//         if($nombre == $tableau[$i]){ 
//             $estvrai = true;
//         }
//     }
// }
?>
