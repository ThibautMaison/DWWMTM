<?php 
session_start();
ob_start()
?>
<form method="POST" action="<?= URL ?>Boutique/mv" enctype="multipart/form-data" style="margin-bottom: 200px;margin-top: 200px;">
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="Name">Name :</label>
        <input type="text" class="form-control" id="Name" name="Name" value="<?= $Composant->getName() ?>">
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="Description">Description :</label>
        <input type="text" class="form-control" id="Description" name="Description" value="<?= $Composant->getDescription() ?>">
    </div>
    <h3 class="text-white">Images : </h3>
    <img style="width: 300px" src="<?= URL ?>public/images/<?= $Composant->getImage()?>" alt="">
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="image" class="form-label"> Changer image :</label>
        <input class="form-control-file text-white" type="file" id="image" name="image">
    </div>
    <input type="hidden" name="identifiant" value="<?= $Composant->getId(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content=ob_get_clean();
$Name="Modifier";
require "template.php";
?>