<?php
$annee= readline("Donner une annee : ");

if (($annee%4==0) . ($annee%100!=0 or $annee%400==0)){
    echo "année bissextile";
    }
    else{
        echo "année non bissextile";
}
?>