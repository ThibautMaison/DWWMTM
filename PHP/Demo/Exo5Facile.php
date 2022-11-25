<?php ob_start() ?>

<form action="" method="POST">
    <input type="number" name="nombre" />
    <button type="submit" name="submit">Entrez</button>
</form>

<?php
$pair = null ;
if (isset($_POST["submit"])){
    if($_POST['nombre'] %2 == 0){
    $pair = "Le nombre est pair "; 
}
else{
     $pair = "Le nombre est impair";
    }
}
?>

<p><?php echo $pair ?></p>

<?php 
$titre = "EXO 5";
$content = ob_get_clean();
require "template.php";
?>