<?php
$sexe = readline ("entrez le sexe:");
$age =  readline ("entrez l'age:");

if (($sexe == "Homme" && $age>20) or ($sexe == "Femme" && $age >=18 && $age<=35)){
    echo ("imposable");
}
    else{
        echo ("Non Imposable");
    }
?>