<?php ob_start() ?>

<?php
$nom = "Marie";
$age = "30";
$homme = false;
if($homme){
    $homme = "homme";
}
elseif($homme == false){
    $homme = "femme";
}
?>
<p class="Marie"><?= $nom ?> à <?= $age ?> ans et c'est une <?= $homme ?> </p>

<?php
$nom2 = "Pierre";
$age2 = "32";
$homme = true;

if($homme){
    $homme = "homme";
}
elseif($homme == false){
    $homme = "femme";
}

?>

<p class="Pierre"><?= $nom2 ?> à <?= $age2 ?> ans et c'est une <?= $homme ?> </p>

<?php 
$titre = "EXO 2";
$content = ob_get_clean();
require "template.php";
?>