<?php
$heure = readline("Donner une heure : ");
$minute = readline("Donner une minute : ");
$seconde = readline ("donner une seconde :");
$seconde= $seconde+1;

if ($seconde>=60){
    $seconde = 0;
    $minute = $minute+1;
    }
    if ($minute >=60){
        $heure=$heure+1;
        $minute=$minute-60;
        if ($heure>24){
            $heure=$heure-24;
        }
    }
    else
        if ($minute >=60){
            $heure=$heure+1;
            $minute=$minute-60;
            if ($heure >=24){
                $heure=$heure-24;
    }
}
    if ($heure>=24){
        $heure=$heure-24;
    }
    else
    if ($heure>=24){
        $heure=$heure-24;
    }



echo("Dans une minute, il sera ".$heure." heure(s) ".$minute. "minute(s) " . $seconde . "seconde(s)")
?>