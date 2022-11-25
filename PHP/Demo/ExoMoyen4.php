<?php ob_start() ?>
<form action="" method="GET">
    <button type="submit" name="animaux">tout les animaux</button>
    <button type="submit" name="chien">chien</button>
    <button type="submit" name="chat">chat</button>
</form>
<?php
$tab = array(
    'Marie' => array("5", "chien"),
    'Pierre' => array("4", "chat"),
    'Riri' => array("10", "chat"),
    'Fifi' => array("8", "chien"),
);
if (isset($_GET["animaux"])) {
foreach($tab as $key => $value){
    ?>  <h1>Nom :   <?=$key ?></h1><?php
    ?>  <h1>Age :   <?= $value[0] ?></h1> <?php
    ?>  <h1>Type :  <?= $value[1] ?></h1> 
    ---------------------------------<?php
    }
}
if (isset($_GET["chat"])) {
    foreach($tab as $key => $value){
    if($value[1]== "chat"){
            ?>    <h1>Nom :     <?=$key ?></h1><?php
            ?>    <h1>Age :     <?= $value[0] ?></h1> <?php
            ?>    <h1>Type :    <?= $value[1] ?></h1> 
            ---------------------------------<?php
        }
    }
}
if (isset($_GET["chien"])) {
    foreach($tab as $key => $value){
    if($value[1]== "chien"){
            ?>    <h1>Nom :     <?= $key ?></h1><?php
            ?>    <h1>Age :     <?= $value[0] ?></h1> <?php
            ?>    <h1>Type :    <?= $value[1] ?></h1> 
            ---------------------------------<?php
        }
    }
}
?>
<?php
$titre = "Exo Moyen 4";
$content = ob_get_clean();
require "template.php";
?>