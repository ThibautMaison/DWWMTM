<?php
session_start();
ob_start();
$Name="CONTACT";
require "Titre.view.php"?>

<form method="POST" style="margin-bottom: 200px;margin-top: 100px;">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white">Nom :</label>
        <input type="text" class="form-control"name="Nom" requied>
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white">Email :</label>
        <input type="text" class="form-control"name="Email" requied>
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white">Sujet :</label>
        <input type="text" class="form-control"name="Sujet" requied>
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white">Message :</label>
        <input type="text" class="form-control"name="Message" requied>
        <!-- id sert pour js et css -->
    </div>
    <button type="submit" name="Envoyer" class="btn btn-primary">Envoyer</button>
</form>

<?php

if(isset($_POST['Envoyer'])){
    $Message = "Ce message vous a été envoyé via la page conatct du site SHOP.TAIIZERR.fr
    Nom : " . $_POST["Nom"] . "
    Email : " . $_POST["Email"] . "
    Sujet : " . $_POST["Sujet"] . "
    Message : " . $_POST["Message"];

    $retour = mail("thibauttayzer@gmail.com", $_POST["Sujet"] , $Message,
    "From:contact@exemple.fr " . "\r\n" . "Reply-to:" . $_POST["Email"]);
    if($retour){
        echo "Le messagee a bien été envoyé";
    }
}
?>
<?php
$content=ob_get_clean();
require "template.php";
?>