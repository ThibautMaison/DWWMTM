<?php
// Demande à l'utilisateur de rentrer un nombre pour lequel il veut afficher la table de multiplication
$nombre = readline("entrez un nombre pour lequel vous voulez la table de multiplication :");

// Initialise la variable prod à 1
$prod = 1;

// Initialise la variable i à 0
$i = 0;

// Initialise la variable reponse à 1
$reponse = 1;

// Boucle qui s'exécute tant que l'utilisateur ne répond pas "N"
while($reponse != "N" ){
    // Boucle qui s'exécute tant que i est inférieur ou égal à 10
    while($i <= 10){
        // Calcule le produit de nombre et i et le stocke dans la variable prod
        $prod = $nombre*$i;

        // Affiche le résultat du calcul sous forme de table de multiplication
        echo $nombre . ' x ' . $i . ' = ' . $prod . "\n" ;

        // Incrémente i de 1
        $i++;
    } 
    // Réinitialise la variable reponse à 1
    $reponse = 1;

    // Boucle qui s'exécute tant que l'utilisateur ne répond pas "N" ni "O"
    while($reponse != "N" && $reponse != "O"){
        // Demande à l'utilisateur s'il veut faire un autre calcul
        $reponse = readline("Voulez vous faire un autre calcul (O/N)");
    }
}
?>