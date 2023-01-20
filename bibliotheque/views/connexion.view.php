<?php
session_start();
ob_start();
$Name="CONNEXION";
require "Titre.view.php"?>

<form method="POST" action="" enctype="multipart/form-data" style="margin-bottom: 200px;margin-top: 200px;">
<!-- enctype="multipart/form-data" obliger de le mettre quand on charge un fichier -->
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;" >
        <label class="text-white" for="Pseudo">Pseudo :</label>
        <input type="text" class="form-control" id="Pseudo" name="Pseudo">
        <!-- id sert pour js et css -->
    </div>
    <div class="form-group" style="margin-bottom: 50px;margin-top: 50px;">
        <label class="text-white" for="Password">Password :</label>
        <input type="password" class="form-control" id="Password" name="Password">
    </div>
    <button type="submit" name="Connecter" class="btn btn-primary">Se connecter</button>
</form>

<?php

if(isset($_POST['Connecter']))
{
	$Pseudo=$_POST['Pseudo'];
	$Password=$_POST['Password'];

    $db=new PDO("mysql:host=localhost;dbname=pcsite;charset=utf8","root","");

    $sql="select * from Users where Pseudo = '$Pseudo' ";	
    $result=$db->prepare($sql);
    $result->execute();
    if($result->rowCount() > 0){
        $data = $result->fetchAll();
        if(password_verify($Password, $data[0]['Password'])){
            echo '<br><br>connecter avec succès!';
            $_SESSION['Pseudo'] = $Pseudo;
            header("Location: ".URL."accueil"); 
        }else{
            echo"reessaye";
        }
    }
}

?>
<?php
$content=ob_get_clean();
require "template.php";
?>













<?php
$content=ob_get_clean();
require "template.php";
?>