<?php
$reponse = 1 ;
//boucle while
while($reponse != "N" ){
    //les variables
    $A = readline("Quelle est la valeur de a : ");
    $B = readline("Quelle est la valeur de b : ");
    $C = readline("Quelle est la valeur de c : ");
    // Calcul de $D
    $D = ($B * $B) - (4 * $A * $C ) ;
    // Si inferieur
    if($D < 0){
        echo "Delta est inférieur à 0 alors il n’y a pas de racine réelle : " . "\n Delta = " . $D. "\n";
    }
    // Si egal 0
    if($D == 0){
        $X1 = -($B / (2*$A));
        echo "Delta est égal à 0 alors il y a une racine double : " . "\n Delta = " . $D . "\n" . " X1 = X2 = " . $X1 . "\n";
    }
    // Si superieur
    if($D > 0){
        $X1 = -( - $B + sqrt( $D ) ) / 2 * $A ;
        $X2 = -( - $B - sqrt( $D ) ) / 2 * $A ;
        echo "Delta  est supérieur à 0 alors il y a deux racines distinctes : : " . "\n Delta = " . $D . "\n" . "L'équation s'annule pour : \nX1 = " . $x1 . "\n" . "X2 = " . $x2 . "\n";
    }
    // seconde boucle while pour continuer
    $reponse = 1;
    // Verification pour recommencer une demande
    while($reponse != "N" && $reponse != "O"){
        $reponse = readline("Voulez vous faire un autre calcul (O/N) ?");
            }
}
echo "Au revoir et & bientot"
?>