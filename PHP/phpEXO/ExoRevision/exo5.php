<?php 
function comparatif(){
    $nb1 = readline("entrez un 1er nombre:");
$nb2 = readline("entrez un 2eme nombre");

if($nb1 > $nb2){
    echo "le 1er nombre est plus grand que le 2eme";
}elseif($nb1 < $nb2){
    echo "le 2eme nombre est plus grand que le 1er";
}elseif($nb1 == $nb2){
    echo "les 2 nombres sont egaux";
}
}
?>