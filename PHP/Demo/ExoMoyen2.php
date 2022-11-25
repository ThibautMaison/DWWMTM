<?php ob_start() ?>
<?php
$tab = array(
    'Marie' => array("32","Femme"),
    'Pierre' => array("32","Homme"),
    'Riri' => array("28","Homme"),
    'Fifi' => array("28","Femme"),
    );
    foreach($tab as $key => $value){
        ?>  <p>Nom :<?=$key ?></p><?php
        ?>  <p>Age :  <?= $value[0] ?></p> <?php
        ?>  <p>Sexe :  <?= $value[1] ?></p> 
        ---------------------------------<?php
    }
?>
<?php 
$titre = "Exo Moyen 2";
$content = ob_get_clean();
require "template.php";
?>