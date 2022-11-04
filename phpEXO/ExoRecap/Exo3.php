<?php
$debut = readline("Choisiser un personnage entre Mouielle Rose, le professeur Violet,le Colonel Moutarde, Le Révérend Olive et Mme Leblanc ." );

$reponse = readline ("Votre personnage a-t-il des moustaches ? ");

if($reponse == "oui"){
    $reponse = true;
}
elseif($reponse == "non"){
    $reponse = false;
}


if($reponse){
echo ("Votre personnage est le Colonel Moutarde");
}
else{
    $reponse = readline("Est-ce que votre personnage est un homme ?");
    if($reponse == "oui"){
        $reponse = true;
    }
    elseif($reponse == "non"){
        $reponse = false;
    }
    if($reponse){
        $reponse  = readline("Votre personnage porte-t-il un chapeau ?");
        if($reponse == "oui"){
            $reponse = true;
        }
        elseif($reponse == "non"){
            $reponse = false;
        }
        if($reponse){
            echo ("Votre personnage est le professeur Violet ");
        }
        else{
            echo ("Votre personnage est Le Révérend Olive ");
        }
    }
    else{
        $reponse = readline ("Votre personnage porte-t-il des lunettes ?");
        if($reponse == "oui"){
            $reponse = true;
        }
        elseif($reponse == "non"){
            $reponse = false;
        }
        if($reponse){
            echo("Votre personnage est Mme Leblanc ");
        }
        else{
            echo("Votre personnage est Melle Rose ");
        }
    }
}
?>