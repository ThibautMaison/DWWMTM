<?php
function afficherTableau($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
?> <p> Note <?= $i + 1 . " = " . $tab[$i] ?></p>
    <?php
    }
    return;
}
function calculerMoyenne($tab)
{
    $moyenne = round(array_sum($tab) / count($tab), 2);
    ?> <p>La moyenne est de <?= $moyenne ?></p>
    <?php
    return;
}
function estTableauPair($tab)
{
    $booleen = true;
    foreach ($tab as $value) {
        if ($value % 2 !== 0) {
            $booleen = false;
        }
    }
    if ($booleen) {
    ?><p>Les nombres du tableau sont tous pair </p>
    <?php
    } elseif ($booleen == false) { 
        ?><p>Les nombres du tableau ne sont pas tous pair </p><?php
    }
}
?>