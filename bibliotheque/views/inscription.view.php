<?php
session_start();
ob_start();
$Name="INSCRIPTION";
require "Titre.view.php"?>

<form method="POST" action="<?= URL ?>inscription/9" style="margin-bottom: 200px;margin-top: 50px;">
 <!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white" for="Pseudo">Pseudo :</label>
        <input type="text" class="form-control" id="Pseudo" name="Pseudo">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white" for="Email">Email :</label>
        <input type="text" class="form-control" id="Email" name="Email">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="Password">Password :</label>
        <input type="password" class="form-control" id="Password" name="Password">
    </div>
    <button type="submit" name="Sinscrire" class="btn btn-primary">S'inscrire</button>
</form>

<?php
$content=ob_get_clean();
require "template.php";
?>