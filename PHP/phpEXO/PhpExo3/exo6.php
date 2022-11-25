<?php
$heure = readline("Donner une heure : ");
$minute = readline("Donner une minute : ");
$minute= $minute+1;

if ($minute ==60){
    $heure=$heure+1;
    $minute=0;
    if ($heure ==24){
        $heure=0;
    }
    elseif ($heure>24){
        $heure=$heure-24;
    }
}
elseif ($minute>60){
    $heure=$heure+1;
    $minute=$minute-60;
    if ($heure ==24){
        $heure=0;
    }
    elseif ($heure>24){
        $heure=$heure-24;
    }
}



echo("Dans une minute, il sera ".$heure." heure(s) ".$minute)
?>