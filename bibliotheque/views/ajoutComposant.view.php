<?php 
session_start();
ob_start()
?>

<form method="POST" action="<?= URL ?>Boutique/av" enctype="multipart/form-data" style="margin-bottom: 200px;margin-top: 200px;">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white" for="Name">Name :</label>
        <input type="text" class="form-control" id="Name" name="Name">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="Description">Description :</label>
        <input type="text" class="form-control" id="Description" name="Description">
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="image" class="form-label">Image :</label>
        <input class="form-control-file text-white" type="file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$Name = "Ajout d'un livre";
require "template.php";
?>