<?php 
ob_start()?>

<div class="row">
    <div class="col-6">
        <img src="<?=URL ?>public/images/<?= $Composant->getImage() ?>">
    </div>
    <div class="col-6 ">
        <p>Name : <?= $Composant->getName() ?></p>
        <p>Description : <?= $Composant->getDescription() ?></p>
    </div>
</div>

<?php
    $Name=$Composant->getName();
    $content=ob_get_clean();
    require "template.php";
?>