<?php 
$nb1 = readline("entrez un nombre entre 100 et 1000:");
$tirage = rand(100,101);

do{
    $nb1 = readline("entrez un nombre entre 100 et 1000:");
}while($nb1 <100 || $nb1>1000);

do{
    echo $tirage . "\n";
    $nb1 = readline("Reessaye ils sont differents: ");
}while($nb1 != $tirage);

if($nb1 == $tirage){
    echo "Gagné";
}
?>




?>