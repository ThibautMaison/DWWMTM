<?php ob_start() ?>

<form action="" method="POST">
    <input type="number" name="nombre" />
    <button type="submit" name="submit">Entrez</button>
</form>

<?php
$carre = null;
if (isset($_POST["submit"])) {
    $val = $_POST['nombre'];
    $carre = $val * $val;
}
$titre = "EXO 1";
$content = ob_get_clean();
require "template.php";
?>
<button>
    <h1><?php echo $carre ?></h1>
</button>

<?php 
$titre = "EXO 5";
$content = ob_get_clean();
require "template.php";
?>